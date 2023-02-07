@extends('layout/plantilla')

@section('tituloPagina', 'Clientes')

@section('contenido')
<div class="row">
    <div class="card">
        <div class="card-header">
          Veterinaria
        </div>

 
        <div class="card-body">
          <h5 class="card-title">Clientes</h5>
          <a href="{{route('clientes.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
          <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                </div>
                @endif
            </div>
          </div>
          <hr>
          <p class="card-text">
                <div class="table table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>ID cliente</th>
                            <th>Nombres y Apellidos</th>
                            <th>Celular</th>
                            <th>Email</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            @foreach ($datos as $cliente)
                                <tr>
                                    <td>{{$cliente -> id}}</td>
                                    <td>{{$cliente -> nom_ape_cli}}</td>
                                    <td>{{$cliente -> cel_cli}}</td>
                                    <td>{{$cliente -> email_cli}}</td>
                                    <td>
                                        <form action="{{ route("clientes.edit", $cliente->id) }}" method="GET">
                                            @csrf
                                            <button class="btn btn-dark btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route("clientes.show", $cliente->id) }}" method="GET">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
          </p>
        </div>
      </div>
</div>


@endsection