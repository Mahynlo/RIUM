<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormRegistro extends Model
{
    use HasFactory;
    protected $fillable = [
        'proyecto',
        'tipo',
        'nombres',
        'apellidos',
        'correo',
    ];
}
