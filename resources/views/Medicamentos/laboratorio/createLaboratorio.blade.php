@extends('layout/plantillaadmi')

@section('TituloPagina', 'Empleados')

@section('contenido')
<div class="card">
  <div class="card-header">
    Registro
  </div>
  <div class="card-body">
    <h5 class="card-title">Agregar nuevo Laboratorio</h5>

    <form action="{{route('laboratorio.store')}}" method="POST">
        @csrf
        <label for="">Nombre del Laboratorio</label>
        <input type="text" name="Laboratorio" class="form-control" required>
        
        <br>
        <button class="btn btn-primary">Agregar</button>
        <a href="{{route ('laboratorio.index')}}" class="btn btn-danger">regresar</a>
    </form>
  </div>
</div>
@endsection