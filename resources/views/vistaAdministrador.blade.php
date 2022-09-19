@extends('layout/plantillaadmi')


@section('TituloPagina', 'Inicio')

@section('contenido')   
<div class="card">
  <div class="card-header">
    Farmacia El DOCTORSIMIDARCK
  </div>
  <div class="card-body">
    <h5 class="card-title">Administacion de farmacia</h5>
    <p class="card-text">Ingrese su opcion</p>
    <br>
    <a href="" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Inventario</a>
    <a href="" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Salir</a>
  </div>
</div>
@endsection