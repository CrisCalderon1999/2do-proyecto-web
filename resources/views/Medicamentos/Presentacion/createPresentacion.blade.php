@extends('layout/plantillaadmi')

@section('TituloPagina', 'Presentacion')

@section('contenido')
<div class="card">
  <div class="card-header">
    Registro
  </div>
  <div class="card-body">
    <h5 class="card-title">Agregar nueva Presentacion</h5>

    <form action="{{route('presentacion.store')}}" method="POST">
        @csrf
        <label for="">Ingrese tipo de presentacion</label>
        <input type="text" name="Presentacion" class="form-control" required>
        
        <br>
        <button class="btn btn-primary">Agregar</button>
        <a href="{{route ('presentacion.index')}}" class="btn btn-danger">regresar</a>
    </form>
  </div>
</div>
@endsection