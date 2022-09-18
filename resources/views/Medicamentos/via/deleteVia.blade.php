
@extends('layout/plantillaadmi')

@section("TituloPagina","Eliminar un registro")

@section('contenido')


    <div class="card">
        <h5 class="card-header">Eliminar Datos</h5>
        <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!
                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                <thead>
          <th>Nombre del laboratorio</th>
          
         
      </thead>
      <tbody>       
                  <tr>
                  <td>{{$datos->Via}}</td>
                 
                            </tr>
                        </tbody>
                </table>
                <form action="{{ route('via.delete',$datos->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                <a href="{{ route('via.index') }}" class="btn btn-secondary"><span class="fas fa-undo-alt"></span> Regresar</a>
                    <button class="btn btn-danger"><i class="fas fa-user-times"></i> Eliminar</button>
                </form>
            </div>
        </p>
       
        </div>
    </div>

@endsection
