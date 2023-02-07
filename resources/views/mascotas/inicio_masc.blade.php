@extends('layout/plantilla')

@section('tituloPagina', 'Mascotas')

@section('contenido')
<div class="row">
    <div class="card">
        <div class="card-header">
          Veterinaria
        </div>
        <div class="card-body">
          <h5 class="card-title">Mascotas</h5>
          <p>
                <a href="{{route('mascotas.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
          </p>
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
                            <th>ID Mascota</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            @foreach ($datos as $mascota)
                                <tr>
                                    <td>{{$mascota -> id}}</td>
                                    <td>{{$mascota -> nom_masc}}</td>
                                    <td>{{$mascota -> tipo_masc}}</td>n
                                    <td>
                                        <form action="{{ route("mascotas.edit", $mascota->id) }}" method="GET">
                                            @csrf
                                            <button class="btn btn-dark btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route("mascotas.show", $mascota->id) }}" method="GET">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
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