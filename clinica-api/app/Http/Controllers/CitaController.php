<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
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

    public function filtrarPorFecha(Request $request, $desde, $hasta, $paginas) {
        return Cita::with(['paciente', 'medico', 'especialidad'])
            ->where('fecha', '>=', $desde)
            ->where('fecha', '<=', $hasta)
            ->orderByDesc('fecha')
            ->paginate($paginas);
    }

    /*public function filtrarPorPaciente(Request $request, $paciente) {
        return Cita::with(['paciente', 'medico', 'especialidad'])
            ->where('paciente_id', $paciente)
            ->orderByDesc('fecha')
            ->get();
    }*/

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
        $cita = Cita::create([
            'paciente_id' => $request->paciente_id, 
            'medico_id' => $request->medico_id, 
            'fecha' => $request->fecha, 
            'sintomas' => $request->sintomas, 
            'diagnostico' => $request->diagnostico, 
            'tratamiento' => $request->tratamiento, 
            'especialidad_id' => $request->especialidad_id, 
            'signos_vitales' => $request->signos_vitales
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $mod)
    {
        $cita = Cita::find($mod->id); 
        if (!is_null($cita)) {
            $cita->paciente_id = $mod->paciente_id;
            $cita->medico_id = $mod->medico_id;
            $cita->fecha = $mod->fecha;
            $cita->sintomas = $mod->sintomas;
            $cita->diagnostico = $mod->diagnostico;
            $cita->tratamiento = $mod->tratamiento; 
            $cita->especialidad_id = $mod->especialidad_id;
            $cita->signos_vitales = $mod->signos_vitales;
            $cita->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
