
@extends('layout/plantillacli')

@section("TituloPagina","Eliminar un registro")

@section('contenido')



<div class="card">
  <div class="card-header">
    {{$datos->articulo}}
  </div>
  <div class="card-body">
  <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/imagen/{{$datos->Imagen}}" class="img-fluid rounded-start" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><b>Precio:</b> Q{{$datos->Precio_v}}</h5>
        <h5 class="card-title"><b>Existencias:</b> {{$datos->Existencia_a}} Unidades</h5>
        <h5 class="card-title"><b>Categoria:</b> {{$datos->Categoria}}</h5>
        <h5 class="card-title"><b>Fabricante:</b> {{$datos->Fabricante}}</h5>
        
       
      </div>
    </div>
  </div>
</div>
    <a href="#" class="btn btn-primary">Añadir al carrito</a>
    <a href="{{route ('cliente.create')}}" class="btn btn-primary">Regresar</a>
  </div>
</div>


@endsection
