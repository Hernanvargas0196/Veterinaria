@extends('layout/plantilla')

@section('tituloPagina', "Crear un nuevo Cliente")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar Cliente</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{route('clientes.store')}}" method="POST">
            @csrf
            <label for="">ID</label>
            <input type="number" min="0" name="id" class="form-control" placeholder="Cedula" required>
            <label for="">Nombres y Apellidos</label>
            <input type="text" name="nom_ape_cli" class="form-control" required>
            <label for="">Celular</label>
            <input type="number" min="0" name="cel_cli" class="form-control" required>
            <label for="">Email</label>
            <input type="email" name="email_cli" class="form-control" placeholder="ejemplo@ejemplo.com" required>
            <br>
            <a href="{{route("clientes.index")}}"><i class="fa-solid fa-arrow-left-long"></i></a>
            <hr>
            <button class="btn btn-primary">
              <i class="fa-solid fa-check"></i>
            </button>
            
        </form>
      </p>
      
    </div>
  </div>
@endsection