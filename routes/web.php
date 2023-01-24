<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('header');
})->name('home');

Route::get('productos', [ProductosController::class, 'mostrar'])->name('productos.show');

Route::get('productos/computadoras', [ProductosController::class, 'computadoras'])->name('productos.computadoras');

Route::get('productos/smarthphones', [ProductosController::class, 'telefonos'])->name('productos.telefonos');

Route::get('productos/tablets', [ProductosController::class, 'tablets'])->name('productos.tablets');


Route::get('productos/computadoras/{nombre}', [ProductosController::class, 'computadorasVer'])->name('computadoras.mostrar');

Route::get('productos/smarthphones/{producto}', [ProductosController::class, 'telefonosVer'])->name('telefono.mostrar');

Route::get('productos/tablets/{producto}', [ProductosController::class, 'tabletsVer'])->name('tableta.mostrar');


Route::get('login', [UserController::class, 'login'])->name('user.login');

Route::get('registro', [UserController::class, 'register'])->name('user.registro');