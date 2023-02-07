@extends('layout/plantilla')

@section('tituloPagina', "Crear un nuevo Cliente")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Cliente</h5>
    <div class="card-body">
      
      <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este cliente y todas sus mascotas?

                <table class="table table-sm table-hover">
                    <thead>
                        <th>ID cliente</th>
                        <th>Nombres y Apellidos</th>
                        <th>Celular</th>
                        <th>Email</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->nom_ape_cli}}</td>
                            <td>{{$cliente->cel_cli}}</td>
                            <td>{{$cliente->email_cli}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('clientes.destroy', $cliente->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{ route("clientes.index")}}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>


            </div>
      </p>
      
    </div>
  </div>
@endsection