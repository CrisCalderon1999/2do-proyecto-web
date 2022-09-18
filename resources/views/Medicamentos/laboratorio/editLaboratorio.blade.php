@extends('layout/plantillaadmi')

@section('TituloPagina', 'Empleados')

@section('contenido')
<div class="card">
  <div class="card-header">
    Registro
  </div>
  <div class="card-body">
    <h5 class="card-title">Editar Laboratorio</h5>

    <form action="{{route('laboratorio.update',$datos->id)}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nombres del laboratorio</label>
        <input type="text" name="Laboratorio" class="form-control" required value="{{$datos->Laboratorio}}" >
        <br>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{route ('laboratorio.index')}}" class="btn btn-danger">regresar</a>
    </form>
  </div>
</div>
@endsection