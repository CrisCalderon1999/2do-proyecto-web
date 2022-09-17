@extends('layout/plantillaadmi')


@section('TituloPagina', 'Inicio')

@section('contenido')   
<div class="card">
  <div class="card-header">
    Farmacia la El DOCTORSIMIDARCK
  </div>
  <div class="card-body">
    <h5 class="card-title">Administacion de farmacia</h5>
    <p class="card-text">Ingrese su opcion</p>
    <a href="vistaAdministrador.blade.php" class="btn btn-primary">Inventario</a>
  </div>
</div>
@endsection