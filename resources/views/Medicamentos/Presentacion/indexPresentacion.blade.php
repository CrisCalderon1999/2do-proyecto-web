@extends('layout/plantillaadmi')


@section('TituloPagina', 'Inventario Laboratorios')

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
    <h5 class="card-title">Tipos de presentaciones</h5>
    <a href="{{route('presentacion.create')}}" class="btn btn-primary">Agregar Presentacion</a>
    <a href="{{route('vistaad')}}" class="btn btn-primary">Salir</a>
    <br><br>
    <table class="table table-sm table-bordered">
      <thead>
          <th>Presentacion</th>
          <th>Editar</th>
          <th>Eliminar</th>
      </thead>
      <tbody>
      @foreach ($datos as $item)       
                  <tr>
                  <td>{{$item->Presentacion}}</td>
                      <td>
                        <form action="{{route('presentacion.edit',$item->id)}}" method="GET">
                          <button class="btn btn-warning btn-sm">
                          <i class="fas fa-user-edit"></i>
                          </button>
                          </form>
                          </td>
                          <td>
                          <form action="{{route('presentacion.show',$item->id)}}" method="GET">
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