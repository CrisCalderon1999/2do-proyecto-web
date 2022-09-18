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
        return view('Medicamentos.laboratorio.createLaboratorio');
    }

    
    public function store(Request $request)
    {
        $laboratorios= new Laboratorio();
        $laboratorios->Laboratorio=$request->post('Laboratorio');
        $laboratorios->save();

        return \redirect()->route("laboratorio.index")->with("success","Laboratorio agregado con exito!");
    }

    
    public function show($id)
    {
        $datos = Laboratorio::find($id);
        return view('Medicamentos.laboratorio.deleteLaboratorio',compact('datos'));
    }

    
    public function edit($id)
    {
        $datos = Laboratorio::find($id);
        return view('Medicamentos.laboratorio.editLaboratorio',compact('datos'));
    }

    
    public function update(Request $request, $id)
    {
        $laboratorios=Laboratorio::find($id);
        $laboratorios->Laboratorio=$request->post('Laboratorio');
        
        $laboratorios->save();

        return \redirect()->route("laboratorio.index")->with("success","Laboratorio actualizada con exito!");
   
    }

    
    public function destroy($id)
    {
        $laboratorios = Laboratorio::find($id);
        $laboratorios->delete();
        return \redirect()->route("laboratorio.index")->with("success","Laboratorio Eliminado con exito!");
   
        
    }
}
