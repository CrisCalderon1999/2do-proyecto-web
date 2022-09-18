@extends('layout/plantillaadmi')


@section('TituloPagina', 'Inventario de Medicamentos')

@section('contenido')   
<div class="card">
<div class="row">
        <div class="col-sm-12">
            @if($mensaje= Session::get('success'))
                <div class="alert alert-success" role="alert">   
                    {{$mensaje}}
                </div>
            @endif
        </div>
    </div>
  <div class="card-header">
    Farmacia El DOCTORSIMIDARCK
  </div>
  <div class="card-body">
    <h5 class="card-title">Medicamentos</h5>
    <a href="{{route('medicamentos.create')}}" class="btn btn-primary">Agregar nuevo medicamentos</a>
    <a href="{{route('vistaad')}}" class="btn btn-primary">Salir</a>
    <br><br>
    <table class="table table-sm table-bordered">
      <thead>
          <th>Nombre</th>
          <th>Precio de venta</th>
          <th>Precio de compra</th>
          <th>Existencia minima</th>
          <th>Existencia maxina</th>
          <th>Laboratorio</th>
          <th>Presentacion</th>
          <th>Via de administracion</th>
          <th>Imagen</th>
          <th>Editar</th>
          <th>Eliminar</th>
      </thead>
      <tbody>
      @foreach ($datos as $item)       
                  <tr>
                  <td>{{$item->Nombre}}</td>
                  <td>{{$item->Precio_venta}}</td>
                  <td>{{$item->Precio_compra}}</td>
                  <td>{{$item->Existencia_min}}</td>
                  <td>{{$item->Existencia_max}}</td>
                  <td>{{$item->laboratorios->Laboratorio}}</td>
                  <td>{{$item->presentacions->Presentacion}}</td>
                  <td>{{$item->via_administracions->Via}}</td>
                  <td>{{$item->Imagen}}</td>
                      <td>
                        <form action="{{route('via.edit',$item->id)}}" method="GET">
                          <button class="btn btn-warning btn-sm">
                          <i class="fas fa-user-edit"></i>
                          </button>
                          </form>
                          </td>
                          <td>
                          <form action="{{route('via.show',$item->id)}}" method="GET">
                                  <button class="btn btn-danger btn-sm">
                                  <i class="fas fa-user-times"></i>
                                  </button>
                              </form>
                          </td>
                      </tr>
                @endforeach
      </tbody>
  </table>
  </div>
</div>
@endsection