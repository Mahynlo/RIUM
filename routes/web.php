<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Inscripciones;
use App\Http\Livewire\Posts;
use App\Http\Livewire\UsersTable;
use App\Models\Post;
use App\Http\Livewire\Formulario;
use App\Models\FormRegistro;

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
    return view('welcome');
});
*/

//Rutas de pagina principal 
Route::get('/', 'App\Http\Controllers\PaginaPrincipal@inicio');

Route::get('/registro', 'App\Http\Controllers\PaginaPrincipal@registro');

Route::get('/poster', 'App\Http\Controllers\PaginaPrincipal@poster');

Route::get('/programa', 'App\Http\Controllers\PaginaPrincipal@programa');

Route::get('/contacto', 'App\Http\Controllers\PaginaPrincipal@contacto');

Route::get('/ubicacion', 'App\Http\Controllers\PaginaPrincipal@ubicacion');

//Route::get('/registro/formulario', 'App\Http\Controllers\PaginaPrincipal@formulario');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

        //Rutas de administrador
    Route::get('/dashboard', function () {
        return view('dashboard',[
            'formregistros' => FormRegistro::all(),
        ]);
    })->name('dashboard');

    Route::get('/dashboard/modificar',Posts::class)->name('modificar');


    Route::get('/dashboard/inscripciones',Formulario::class)->name('inscripciones');

    Route::get('/dashboard/usuarios',UsersTable::class)->name('usuarios');
    
});


/*Route::get('/formulario', function () {

    return view('registro.formulario.formulario_artesanal');
});*/

//Route::post('informacionEnviada', formulario::class)-> name('informacionEnviada'); 


