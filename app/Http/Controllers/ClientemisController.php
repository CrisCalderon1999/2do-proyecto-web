<?php

namespace App\Http\Controllers;

use App\Models\Clientemis;
use Illuminate\Http\Request;
use App\Models\Miscelanea;
class ClientemisController extends Controller
{
    
    public function index()
    {
        
        $datos = Miscelanea::all();
        return view('clientesmis.indexClientesMiscelanea',compact('datos'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Clientemis  $clientemis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientemis  $clientemis
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientemis $clientemis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientemis  $clientemis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientemis $clientemis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientemis  $clientemis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientemis $clientemis)
    {
        //
    }
}
