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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miscelanea  $miscelanea
     * @return \Illuminate\Http\Response
     */
    public function show(Miscelanea $miscelanea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miscelanea  $miscelanea
     * @return \Illuminate\Http\Response
     */
    public function edit(Miscelanea $miscelanea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miscelanea  $miscelanea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miscelanea $miscelanea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miscelanea  $miscelanea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miscelanea $miscelanea)
    {
        //
    }
}
