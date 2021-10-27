<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
    	'nombres',
    	'apellidos',
    	'edad',
    	'sexo',
    	'telefono',
    	'correo',
    	'direccion'
    ];

    protected $hidden = [
    	'created_at',
    	'updated_at'
    ];
}
