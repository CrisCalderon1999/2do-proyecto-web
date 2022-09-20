<?php

namespace App\Http\Controllers;

use App\Models\Miscelanea;
use Illuminate\Http\Request;

class MiscelaneaController extends Controller
{
    
    public function index()
    {
        $datos = Miscelanea::paginate(3);
        return view('Miscelanea.indexMiscelanea',compact('datos'));
    }

   
    public function create()
    {
        return view('Miscelanea.createMiscelanea');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'Articulo' => 'required', 'Precio_v' => 'required', 'Precio_c' => 'required', 'Existencia_m' => 'required','Existencia_mx' => 'required','Categoria' => 'required','Fabricante' => 'required','Existencia_a' => 'required', 'Imagen' => 'required|image|mimes:jpeg,png,svg|max:1024'
        ]);

         $miscelaneas = $request->all();

         if($imagen = $request->file('Imagen')) {
             $rutaGuardarImg = 'imagen/';
             $imagenMiscelanea = date('YmdHis'). "." . $imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg, $imagenMiscelanea);
             $miscelaneas['Imagen'] = "$imagenMiscelanea";             
         }
         
         Miscelanea::create($miscelaneas);
         return redirect()->route('miscelanea.index');
    }

  
    public function show(Miscelanea $miscelanea)
    {
        
    }

   
    public function edit( $id)
    {
        $datos = Miscelanea::find($id);
        return view('Miscelanea.editMiscelanea', compact('datos'));
    }

    
    public function update(Request $request,  $id)
    {
        $bandera=0;
        $miscelaneas=Miscelanea::find($id);
        $miscelaneas->articulo=$request->post('Articulo');
        $miscelaneas->Precio_v=$request->post('Precio_v');
        $miscelaneas->Precio_c=$request->post('Precio_c');
        $miscelaneas->Existencia_m=$request->post('Existencia_m');
        $miscelaneas->Existencia_mx=$request->post('Existencia_mx');
        $miscelaneas->Categoria=$request->post('Categoria');
        $miscelaneas->Fabricante=$request->post('Fabricante');
        $miscelaneas->Existencia_a=$request->post('Existencia_a');

        $request->validate([
            'Articulo' , 'Precio_v' , 'Precio_c' , 'Existencia_m' ,'Existencia_mx' ,'Categoria' ,'Fabricante' ,'Existencia_a'
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
            $miscelaneas->Imagen=$prod['imagen'];
         }
         else{
            $miscelaneas->Imagen=$miscelaneas->Imagen;
         }
         
        
        $miscelaneas->save();
        return \redirect()->route("miscelanea.index")->with("success","Articulo Editado con exito!");
   
    }

    
    public function destroy($id)
    {
        $miscelanea = Miscelanea::find($id);
        $miscelanea->delete();
        return \redirect()->route("miscelanea.index")->with("success","Articulo Eliminado con exito!");
   
    }
}
