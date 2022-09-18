<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use App\Models\Laboratorio;
use App\Models\Presentacion;
use App\Models\Via_administracion;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    
    public function index()
    {
        $datos = Medicamento::all();
        return view('Medicamentos.indexMedicamentos',compact('datos'));
    }

   
    public function create()
    {
        $labs=Laboratorio::all();
        $pres=Presentacion::all();
        $vias=Via_administracion::all();
        return view('Medicamentos.createMedicamentos', compact('labs','pres','vias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamento $medicamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        //
    }
}
