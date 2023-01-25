<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Product;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('home'));
});


Breadcrumbs::for('productos', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Productos', route('productos.show'));
});

Breadcrumbs::for('computadoras', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Computadoras', route('productos.computadoras'));
});

Breadcrumbs::for('ver_computadora', function (BreadcrumbTrail $trail, Product $producto) {
    $trail->parent('computadoras');
    $trail->push($producto->nombre, route('computadoras.mostrar', $producto));
});


Breadcrumbs::for('telefonos', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('SmarthPhones', route('productos.telefonos'));
});

Breadcrumbs::for('ver_telefono', function (BreadcrumbTrail $trail, Product $producto) {
    $trail->parent('telefonos');
    $trail->push($producto->nombre, route('telefono.mostrar', $producto));
});


Breadcrumbs::for('tablets', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Tablets', route('productos.tablets'));
});

Breadcrumbs::for('ver_tableta', function (BreadcrumbTrail $trail, Product $producto) {
    $trail->parent('tablets');
    $trail->push($producto->nombre, route('tableta.mostrar', $producto));
});

Breadcrumbs::for('buscar', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Busqueda', route('busqueda.simple'));
});

Breadcrumbs::for('buscarUno', function (BreadcrumbTrail $trail, Product $producto) {
    $trail->parent('productos');
    $trail->push($producto->nombre, route('producto.mostrar', $producto));
});


Breadcrumbs::for('registro', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Registrarse', route('user.registro'));
});


Breadcrumbs::for('login', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Login', route('user.login'));
});

