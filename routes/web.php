<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('app');
});*/


//Rutas de pagina principal 
Route::get('/', 'App\Http\Controllers\PaginaPrincipal@inicio');

Route::get('/registro', 'App\Http\Controllers\PaginaPrincipal@registro');

Route::get('/poster', 'App\Http\Controllers\PaginaPrincipal@poster');

Route::get('/programa', 'App\Http\Controllers\PaginaPrincipal@programa');

Route::get('/contacto', 'App\Http\Controllers\PaginaPrincipal@contacto');

Route::get('/ubicacion', 'App\Http\Controllers\PaginaPrincipal@ubicacion');

Route::get('/registro/formulario', 'App\Http\Controllers\PaginaPrincipal@formulario');
