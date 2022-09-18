<?php

namespace App\Http\Controllers;

use App\Models\Presentacion;
use Illuminate\Http\Request;

class PresentacionController extends Controller
{
   
    public function index()
    {
        $datos = Presentacion::all();
        return view('Medicamentos.presentacion.indexPresentacion',compact('datos'));
    }

    
    public function create()
    {
        return view('Medicamentos.presentacion.createPresentacion');
    }

    
    public function store(Request $request)
    {
        $presentacions= new Presentacion();
        $presentacions->Presentacion=$request->post('Presentacion');
        $presentacions->save();

        return \redirect()->route("presentacion.index")->with("success","Presentacion agregada con exito!");
 
    }

    
    public function show($id)
    {
        $datos = Presentacion::find($id);
        return view('Medicamentos.presentacion.deletePresentacion',compact('datos'));
    }

    
    public function edit($id)
    {
        $datos = Presentacion::find($id);
        return view('Medicamentos.presentacion.editPresentacion',compact('datos'));
    }

    
    public function update(Request $request, $id)
    {
        $presentacions=Presentacion::find($id);
        $presentacions->Presentacion=$request->post('Presentacion');
        
        $presentacions->save();

        return \redirect()->route("presentacion.index")->with("success","Presentacion actualizada con exito!");
   
    }

   
    public function destroy($id)
    {
        $presentacions = Presentacion::find($id);
        $presentacions->delete();
        return \redirect()->route("presentacion.index")->with("success","Presentacion Eliminada con exito!");
   
    }
}
