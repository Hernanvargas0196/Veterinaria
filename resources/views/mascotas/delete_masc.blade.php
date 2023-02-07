@extends('layout/plantilla')

@section('tituloPagina', "Crear un nuevo Cliente")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Mascota</h5>
    <div class="card-body">
      
      <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar esta mascota?

                <table class="table table-sm table-hover">
                    <thead>
                        <th>ID Mascota</th>
                        <th>Nombre</th>
                        <th>Dueño</th>
                        <th>Tipo</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$mascota->id}}</td>
                            <td>{{$mascota->nom_masc}}</td>
                            <td>{{$mascota->cli_masc}}</td>
                            <td>{{$mascota->tipo_masc}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('mascotas.destroy', $mascota->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{ route("mascotas.index")}}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>


            </div>
      </p>
      
    </div>
  </div>
@endsection