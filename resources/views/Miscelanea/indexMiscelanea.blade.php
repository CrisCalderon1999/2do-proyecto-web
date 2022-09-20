@extends('layout/plantillaadmi')


@section('TituloPagina', 'Medicamentos')

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
    <h5 class="font-semibold text-xl text-gray-800 leading-tight">Inventario de Miscelanea</h5>
    <br>
    <a href="{{route('miscelanea.create')}}" class="bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Agregar nuevo articulo</a>
    <a href="{{route('vistaad')}}" class=" bg-indigo-500 px-12 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Salir</a>
    <br><br>
    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-gray-800 text-white">
           <th>Nombre del articulo</th>
          <th>Precio de venta</th>
          <th>Precio de compra</th>
          <th>Existencia minima</th>
          <th>Existencia maxina</th>
          <th>Categoria</th>
          <th>Fabricante</th>
          <th>Existencia actual</th>
          <th>Imagen</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
          
      </thead>
      <tbody>
      @foreach ($datos as $item)       
                  <tr>
                  <td>{{$item->articulo}}</td>
                  <td>{{$item->Precio_v}}</td>
                  <td>{{$item->Precio_c}}</td>
                  <td>{{$item->Existencia_m}}</td>
                  <td>{{$item->Existencia_mx}}</td>
                  <td>{{$item->Categoria}}</td>
                  <td>{{$item->Fabricante}}</td>
                  <td>{{$item->Existencia_a}}</td>
                  <td  class="border px-50 py-1">
                            <img src="/imagen/{{$item->Imagen}}" width="100%">
                        </td>   
                 
                      <td>
                        <form action="{{route('miscelanea.edit',$item->id)}}" method="GET">
                          <button class="rounded bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4">
                          <i class="fas fa-user-edit"></i>
                          </button>
                          </form>
                          </td>
                          <td>
                          <form action="{{ route('miscelanea.delete', $item->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4"> <i class="fas fa-user-times"></i></button>
                                </form>
                          </td>
                      </tr>
                @endforeach
      </tbody>
  </table>
  <div>
                    {!! $datos->links() !!}
                </div>
  </div>
</div>
<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Esta seguro de eliminar el registro "{{$item->Articulo}}"?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#607ec9',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>
@endsection
