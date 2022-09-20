<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Medicamento;

class ClienteController extends Controller
{
    
    public function index()
    { $datos = Medicamento::all();
        return view('Cliente.indexCliente',compact('datos'));
    }

    
    

   
    public function show($id)
    {
        $datos = Medicamento::find($id);
        return view('Cliente.detallesCliente',compact('datos'));
    }

   

    
}
