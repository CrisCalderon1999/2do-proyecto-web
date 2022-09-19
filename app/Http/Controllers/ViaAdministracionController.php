<?php

namespace App\Http\Controllers;

use App\Models\Via_administracion;
use Illuminate\Http\Request;

class ViaAdministracionController extends Controller
{
    
    public function index()
    {
        $datos = Via_administracion::paginate(3);
        return view('Medicamentos.via.indexvia',compact('datos'));
    }

  
    public function create()
    {
        return view('Medicamentos.via.createVia');
    }

    
    public function store(Request $request)
    {
        $Via= new Via_administracion();
        $Via->Via=$request->post('Via');
        $Via->save();

        return \redirect()->route("via.index")->with("success","Via agregada con exito!");
 
    }

    
    public function show($id)
    {
        $datos = Via_administracion::find($id);
        return view('Medicamentos.via.deleteVia',compact('datos'));
    }

    
    public function edit($id)
    {
        $datos = Via_administracion::find($id);
        return view('Medicamentos.via.editVia',compact('datos'));
    }

   
    public function update(Request $request, $id)
    {
        $via=Via_administracion::find($id);
        $via->Via=$request->post('Via');
        
        $via->save();

        return \redirect()->route("via.index")->with("success","Via actualizada con exito!");
   
    }

   
    public function destroy($id)
    {
        $via = Via_administracion::find($id);
        $via->delete();
        return \redirect()->route("via.index")->with("success","Via Eliminada con exito!");
   
    }
}
