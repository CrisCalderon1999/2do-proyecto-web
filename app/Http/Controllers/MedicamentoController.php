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
        $datos = Medicamento::paginate(3);
        return view('Medicamentos.indexMedicamentos',compact('datos'));
    }

   
    public function create()
    {
        $labs=Laboratorio::all();
        $pres=Presentacion::all();
        $vias=Via_administracion::all();
        return view('Medicamentos.createMedicamentos', compact('labs','pres','vias'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required', 'Precio_venta' => 'required', 'Precio_compra' => 'required', 'Existencia_min' => 'required','Existencia_max' => 'required','id_Laboratorio' => 'required','id_Presentacion' => 'required','id_Via_administracion' => 'required', 'imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

         $medicamento = $request->all();

         if($imagen = $request->file('imagen')) {
             $rutaGuardarImg = 'imagen/';
             $imagenMedicamento = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenMedicamento);
             $medicamento['Imagen'] = "$imagenMedicamento";             
         }
         
         Medicamento::create($medicamento);
         return redirect()->route('medicamentos.index');
    }


    public function show(Medicamento $medicamento)
    {
        
    }

    
    public function edit($id)
    {
        $datos = Medicamento::find($id);
        $labs=Laboratorio::all();
        $pres=Presentacion::all();
        $vias=Via_administracion::all();
        return view('Medicamentos.editMedicamentos', compact('labs','pres','vias','datos'));
    }

    
    public function update(Request $request, $id)
    {
        $bandera=0;
        $medicamentos=Medicamento::find($id);
        $medicamentos->Nombre=$request->post('Nombre');
        $medicamentos->Precio_venta=$request->post('Precio_venta');
        $medicamentos->Precio_compra=$request->post('Precio_compra');
        $medicamentos->Existencia_min=$request->post('Existencia_min');
        $medicamentos->Existencia_max=$request->post('Existencia_max');
        $medicamentos->id_Laboratorio=$request->post('id_Laboratorio');
        $medicamentos->id_Presentacion=$request->post('id_Presentacion');
        $medicamentos->id_Via_administracion=$request->post('id_Via_administracion');

        $request->validate([
            'Nombre' , 'Precio_venta' , 'Precio_compra' , 'Existencia_min' ,'Existencia_max' ,'id_Laboratorio' ,'id_Presentacion' ,'id_Via_administracion'
        ]);
        $prod = $request->all();
        if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'imagen/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension(); 
            $imagen->move($rutaGuardarImg, $imagenProducto);
            $prod['imagen'] = "$imagenProducto";
            $bandera=1;
         }else{
            unset($prod['imagen']);
         }
         if($bandera==1)
         {
            $medicamentos->Imagen=$prod['imagen'];
         }
         else{
            $medicamentos->Imagen=$medicamentos->Imagen;
         }
         
        
        $medicamentos->save();
        return \redirect()->route("medicamentos.index")->with("success","Medicamento Editado con exito!");
   
    }

    
    public function destroy($id)
    {
        $medicamentos = Medicamento::find($id);
        $medicamentos->delete();
        return \redirect()->route("medicamentos.index")->with("success","Medicamento Eliminado con exito!");
   
    }
}
