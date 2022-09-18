@extends('layout/plantillaadmi')

@section('TituloPagina', 'Vias de administracion')

@section('contenido')
<div class="card">
  <div class="card-header">
    Registro
  </div>
  <div class="card-body">
    <h5 class="card-title">Agregar nueva Via</h5>

    <form action="{{route('via.store')}}" method="POST">
        @csrf
        <label for="">Ingrese nueva via de administracion</label>
        <input type="text" name="Via" class="form-control" required>
        
        <br>
        <button class="btn btn-primary">Agregar</button>
        <a href="{{route ('via.index')}}" class="btn btn-danger">regresar</a>
    </form>
  </div>
</div>
@endsection