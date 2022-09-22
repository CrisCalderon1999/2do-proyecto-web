<?php

namespace App\Http\Controllers;

use App\Models\Mcontrolado;
use App\Models\Laboratorio;
use App\Models\Presentacion;
use App\Models\Via_administracion;
use Illuminate\Http\Request;

class McontroladoController extends Controller
{
    
    public function index()
    {
        $datos = Mcontrolado::paginate(3);
        return view('MedicamentosControlados.indexControlados',compact('datos'));
        
    }

    
    public function create()
    {
        $labs=Laboratorio::all();
        $pres=Presentacion::all();
        $vias=Via_administracion::all();
        return view('MedicamentosControlados.createControlados', compact('labs','pres','vias'));
        
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required', 'Precio_ven' => 'required', 'Precio_com' => 'required', 'Existencia_min' => 'required','Existencia_max' => 'required','Requisitos' => 'required','id_Laboratorio' => 'required','id_Presentacion' => 'required','id_Via_administracion' => 'required', 'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

         $medicamentocontrolados = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'imagen/';
             $imagenMedicamento = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenMedicamento);
             $medicamentocontrolados['Imagen'] = "$imagenMedicamento";             
         }
         
         Mcontrolado::create($medicamentocontrolados);
         return redirect()->route('controlados.index');

         
    }

    
    public function show(Mcontrolado $mcontrolado)
    {
        
    }

    
    public function edit(Mcontrolado $mcontrolado)
    {
        
    }

   
    public function update(Request $request, Mcontrolado $mcontrolado)
    {
        
    }

    
    public function destroy( $id)
    {
        $controlados = Mcontrolado::find($id);
        $controlados->delete();
        return \redirect()->route("controlados.index")->with("success","Medicamento Eliminado con exito!");
   
    }
}
