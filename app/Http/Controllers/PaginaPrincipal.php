<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaPrincipal extends Controller
{
    public function inicio(){
        return view('PaginaPrincipal.index');
    }

    public function registro(){
        return view('registro.registro');
    }

    public function poster(){
        return view('poster.poster');
    }

    public function programa(){
        return view('programa.programa');
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
