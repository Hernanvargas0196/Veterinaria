@extends('layout/plantilla')

@section('tituloPagina', "Crear un nuevo Cliente")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar Cliente</h5>
    <div class="card-body">
      <p class="card-text">
        <form action="{{route('clientes.update',$cliente->id)}}" method="POST">
            @csrf
            @method("PUT")
            <label for="">ID Cliente</label>
            <input type="number" min="0" name="id" class="form-control" placeholder="Cedula" required value="{{$cliente->id}}" >
            <label for="">Nombres y Apellidos</label>
            <input type="text" name="nom_ape_cli" class="form-control" required value="{{$cliente->nom_ape_cli}}">
            <label for="">Celular</label>
            <input type="number" min="0" name="cel_cli" class="form-control" required value="{{$cliente->cel_cli}}">
            <label for="">Email</label>
            <input type="email" name="email_cli" class="form-control" placeholder="ejemplo@ejemplo.com" required value="{{$cliente->email_cli}}">
            <br>
            <button class="btn btn-info">
              <i class="fa-solid fa-check"></i>
            </button>
            <a href="{{route("clientes.index")}}">Volver</a>
        </form>
      </p>
      
    </div>
  </div>
@endsection