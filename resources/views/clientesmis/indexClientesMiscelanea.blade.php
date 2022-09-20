
@extends('layout/plantillacli')

@section("TituloPagina","Eliminar un registro")

@section('contenido')

@foreach ($datos as $item)

<div class="card" style="width: 18rem;">
<div class="card-body">
  <img src="/imagen/{{$item->Imagen}}" class="card-img-top" alt="...">
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$item->articulo}}</h5>
    <p class="card-text">Precio: Q{{$item->Precio_v}}</p>
    <a href="#" class="btn btn-primary">Ver mas...</a>
  </div>
</div>
@endforeach

@endsection
