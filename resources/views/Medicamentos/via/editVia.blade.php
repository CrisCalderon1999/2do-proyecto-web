@extends('layout/plantillaadmi')

@section('TituloPagina', 'Via de administracion')

@section('contenido')
<div class="card">
  <div class="card-header">
    Registro
  </div>
  <div class="card-body">
    <h5 class="card-title">Editar Via de administracion</h5>

    <form action="{{route('via.update',$datos->id)}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Tipo de Via de administracion</label>
        <input type="text" name="Via" class="form-control" required value="{{$datos->Via}}" >
        <br>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{route ('via.index')}}" class="btn btn-danger">regresar</a>
    </form>
  </div>
</div>
@endsection