<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PaginaPrincipal extends Controller
{
    public function inicio(){
        return view('PaginaPrincipal.index', [
            'posts' => Post::all()
        ]);
    }

    public function registro(){
        return view('registro.registro');
    }

    public function poster(){
        return view('poster.poster');
    }

    public function programa(){
        return view('programa.programa',[
            'posts' => Post::all()
        ]);
    }

    public function contacto(){
        return view('contacto.contacto');
    }

    public function ubicacion(){
        return view('ubicacion.ubicacion');
    }

    public function formulario(){
        return view('registro.formulario.formulario');
    }
}
