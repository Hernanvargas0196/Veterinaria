@extends('layout/plantilla')

@section('tituloPagina', 'Citas')

@section('contenido')
<div class="row">
    <div class="card">
        <div class="card-header">
          Veterinaria
        </div>
        <div class="card-body">
          <h5 class="card-title">Citas</h5>
          <p>
                <a href="{{route('citas.create')}}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
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
                            <th>ID Cita</th>
                            <th>Fecha Cita</th>
                            <th>Hora Cita</th>
                            <th>Mascota</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            @foreach ($datos as $cita)
                                
                            
                                <tr>
                                    <td>{{$cita -> id}}</td>
                                    <td>{{$cita -> fecha_cita}}</td>
                                    <td>{{$cita -> hora_cita}}</td>
                                    <td>{{$cita -> masc_cita}}</td>
                                    <td>
                                        <form action="{{ route("citas.edit", $cita->id) }}" method="GET">
                                            @csrf
                                            <button class="btn btn-dark btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td><form action="{{ route("citas.show", $cita->id) }}" method="GET">
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