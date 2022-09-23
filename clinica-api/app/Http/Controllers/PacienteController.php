<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function todosListar()
    {
        return Paciente::orderBy('nombre')
            ->get();
    }

    public function fitradosListar(Request $request, $eliminados)
    {
        if ($eliminados == 1) {
            return Paciente::withTrashed()
                ->orderBy('nombre')
                ->get();
        } else {
            return Paciente::orderBy('nombre')
                ->get();
        }
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $body = json_decode($request->getContent());
        $paciente = Paciente::create([
            'cedula' => $body->cedula,
            'nombre' => $body->nombre, 
            'direccion' => $body->direccion, 
            'telefono' => $body->telefono, 
            'fecha_nacimiento' => $body->fecha_nacimiento
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $mod = json_decode($request->getContent());
        $paciente = Paciente::find($mod->id); 
        if (!is_null($paciente)) {
            $paciente->cedula = $mod->cedula;
            $paciente->nombre = $mod->nombre;
            $paciente->direccion = $mod->direccion;
            $paciente->telefono = $mod->telefono;
            $paciente->fecha_nacimiento = $mod->fecha_nacimiento;
            $paciente->save();
        }
    }

    /**
     * Soft Delete the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
    }
}
