@extends('layout/plantilla')

@section('tituloPagina', "Crear un nuevo Cliente")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar Cita</h5>
    <div class="card-body">
      
      <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar esta cita?

                <table class="table table-sm table-hover">
                    <thead>
                        <th>ID Cita</th>
                        <th>fecha Cita</th>
                        <th>Hora Cita</th>
                        <th>Mascota</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$cita->id}}</td>
                            <td>{{$cita->fecha_cita}}</td>
                            <td>{{$cita->hora_cita}}</td>
                            <td>{{$cita->masc_cita}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{route('citas.destroy', $cita->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{ route("citas.index")}}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>


            </div>
      </p>
      
    </div>
  </div>
@endsection