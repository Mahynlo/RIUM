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

Route::get('/', function(){
    return view('PaginaPrincipal.index');
});

Route::get('/registro', function(){
    return view('registro.registro');
});

Route::get('/poster', function(){
    return view('poster.poster');
});

Route::get('/programa', function(){
    return view('programa.programa');
});

Route::get('/contacto', function(){
    return view('contacto.contacto');
});

Route::get('/ubicacion', function(){
    return view('ubicacion.ubicacion');
});
