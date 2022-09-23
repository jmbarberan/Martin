<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id', 
        'cedula', 
        'nombre', 
        'direccion', 
        'telefono', 
        'fecha_nacimiento'
    ];
    
}
