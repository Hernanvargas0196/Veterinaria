@extends('layout/plantilla')

@section('tituloPagina', "Crear una nueva Cita")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar Cita</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{route('citas.store')}}" method="POST">
          @csrf
            <label for="">ID cita</label>
            <input type="number" min="0" name="id" class="form-control" placeholder="N Identificacion" required>
            <label for="">Fecha Cita</label>
            <input type="date" name="fecha_cita" class="form-control" required>
            <label for="">Hora_cita</label>
            <input type="time" name="hora_cita" class="form-control" required>
            <label for="">Mascota</label>
            <select name="masc_cita" id="inputMasc_cita" class="form-control">
              @foreach ($mascotas as $mascota)
                <option value="{{$mascota['id']}}">{{$mascota['nom_masc']}}</option>
              @endforeach
            </select>
            <br>
            <a href="{{route("citas.index")}}"><i class="fa-solid fa-arrow-left-long"></i></a>
            <hr>
            <button class="btn btn-primary">
              <i class="fa-solid fa-check"></i>
            </button>
            
        </form>
      </p>
      
    </div>
  </div>
@endsection