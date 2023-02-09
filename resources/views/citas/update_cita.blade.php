@extends('layout/plantilla')

@section('tituloPagina', "Crear un nuevo Cliente")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar Cita</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{route('citas.update',$cita->id)}}" method="POST">
          @csrf
          @method("PUT")
          <label for="">ID cita</label>
          <input type="number" min="0" name="id" class="form-control" required value="{{$cita->id}}">
          <label for="">Fecha Cita</label>
          <input type="date" name="fecha_cita" class="form-control" required value="{{$cita->fecha_cita}}">
          <label for="">Hora_cita</label>
          <input type="time" name="hora_cita" class="form-control" required value="{{$cita->hora_cita}}">
          <label for="">Mascota</label>
          <select name="masc_cita" id="inputMasc_cita" class="form-control">
            @foreach ($mascotas as $mascota)
              <option value="{{$mascota['id']}}">{{$mascota['nom_masc']}}</option>
            @endforeach
          </select>
            <br>
            <button class="btn btn-info">
                Actualizar
            </button>
            <a href="{{route("citas.index")}}">Volver</a>
        </form>
      </p>
      
    </div>
  </div>
@endsection