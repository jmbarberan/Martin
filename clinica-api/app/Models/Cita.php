<?php

namespace App\Models;

use App\Models\Paciente;
use App\Models\Medico;
use App\Models\Especialidad;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function paciente()
    {
        return $this->hasOne(Paciente::class, 'id', 'paciente_id');
    }

    public function medico()
    {
        return $this->hasOne(Medico::class, 'id', 'medico_id');
    }

    public function especialidad()
    {
        return $this->hasOne(Especialidad::class, 'id', 'especialidad_id');
    }

}
