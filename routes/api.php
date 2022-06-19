<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/propiedades', [\App\Http\Controllers\PropiedadController::class, 'index']);
Route::get('/propiedades-home', [\App\Http\Controllers\PropiedadController::class, 'indexHome']);
Route::get('/agentes', [\App\Http\Controllers\AgenteController::class, 'index']);
Route::get('/agencias');
Route::get('/posts-home', [\App\Http\Controllers\PostController::class, 'indexHome']);
Route::get('/tipos-propiedad', [\App\Http\Controllers\TipoPropiedadController::class, 'index']);
