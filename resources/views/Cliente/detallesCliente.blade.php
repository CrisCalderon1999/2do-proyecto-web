
@extends('layout/plantillacli')

@section("TituloPagina","Eliminar un registro")

@section('contenido')



<div class="card">
  <div class="card-header">
    {{$datos->Nombre}}
  </div>
  <div class="card-body">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/imagen/{{$datos->Imagen}}" class="img-fluid rounded-start" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>Precio:</b> Q{{$datos->Precio_venta}}</h5>
        <h5 class="card-title"><b>Existencias:</b> {{$datos->Existencia_max}} Unidades</h5>
        <h5 class="card-title"><b>Laboratorio:</b> {{$datos->laboratorios->Laboratorio}}</h5>
        <h5 class="card-title"><b>Presentacion:</b> {{$datos->presentacions->Presentacion}}</h5>
        <h5 class="card-title"><b>Via de administracion:</b> {{$datos->Via_administracions->Via}}</h5>
        
      </div>
    </div>
  </div>
</div>
    <a href="#" class="btn btn-primary">Añadir al carrito</a>
    <a href="{{route ('cliente.index')}}" class="btn btn-primary">Regresar</a>
  </div>
</div>


@endsection
