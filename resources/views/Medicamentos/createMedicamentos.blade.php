@extends('layout/plantillaadmi')

@section('TituloPagina', 'Vias de administracion')

@section('contenido')
<div class="card">
  <div class="card-header">
    Registro
  </div>
  <div class="card-body">
    <h5 class="card-title">Agregar nuevo Medicamento</h5>

    <form action="{{route('medicamentos.store')}}" method="POST">
        @csrf
        <label for="">Nombre del medicamento</label>
        <input type="text" name="Nombre" class="form-control" required>
        <label for="">Precio de venta</label>
        <input type="text" name="Precio_venta" class="form-control" required>
        <label for="">Precio de compra</label>
        <input type="text" name="Precio_compra" class="form-control" required>
        <label for="">Existencia minima</label>
        <input type="text" name="Existencia_min" class="form-control" required>
        <label for="">Existencia maxima</label>
        <input type="text" name="Nombre" class="form-control" required>
        <label for="">Laboratorio</label>
        <select name="id_Laboratorio" id="" class="form-select">
        @foreach($labs as $lab)
        <option value="{{$lab['id']}}">{{$lab->Laboratorio}}</option>
        @endforeach
        </select>
        <label for="">Presentacion</label>
        <select name="id_Presentacion" id="" class="form-select">
        @foreach($pres as $pre)
        <option value="{{$pre['id']}}">{{$pre->Presentacion}}</option>
        @endforeach
        </select>
        <label for="">Via de administracion</label>
        <select name="id_Via_administracion" id="" class="form-select">
        @foreach($vias as $via)
        <option value="{{$via['id']}}">{{$via->Via}}</option>
        @endforeach
        </select>





        <label for="">Imagen</label>
        <input type="text" name="Nombre" class="form-control" required>
        
        <br>
        <button class="btn btn-primary">Agregar</button>
        <a href="{{route ('medicamentos.index')}}" class="btn btn-danger">regresar</a>
    </form>
  </div>
</div>
@endsection