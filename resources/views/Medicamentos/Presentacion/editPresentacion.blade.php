@extends('layout/plantillaadmi')

@section('TituloPagina', 'Empleados')

@section('contenido')
<div class="card">
  <div class="card-header">
    Registro
  </div>
  <div class="card-body">
    <h5 class="card-title">Editar Presentacion</h5>

    <form action="{{route('presentacion.update',$datos->id)}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Tipo de presentacion</label>
        <input type="text" name="Presentacion" class="form-control" required value="{{$datos->Presentacion}}" >
        <br>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{route ('presentacion.index')}}" class="btn btn-danger">regresar</a>
    </form>
  </div>
</div>
@endsection