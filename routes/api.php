<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('productos',[ProductosController::class,'mostrarProductos']);


Route::post('productosApi', [ProductosController::class, 'mostrarProductos'])->name('productos.api');

Route::post('computadorasApi', [ProductosController::class, 'computadorasApi']);

Route::post('busquedaAApi', [ProductosController::class, 'busquedaAvanzadaApi']);

Route::post('busquedaApi', [ProductosController::class, 'busquedaApi']);
