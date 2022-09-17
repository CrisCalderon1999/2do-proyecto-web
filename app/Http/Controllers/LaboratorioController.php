<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    
    public function index()
    {
        $datos = Laboratorio::all();
        return view('Medicamentos.laboratorio.indexLaboratorio',compact('datos'));
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(Laboratorio $laboratorio)
    {
        
    }

    
    public function edit(Laboratorio $laboratorio)
    {
        
    }

    
    public function update(Request $request, Laboratorio $laboratorio)
    {
        
    }

    
    public function destroy(Laboratorio $laboratorio)
    {
        
    }
}
