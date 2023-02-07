@extends('layout/plantilla')

@section('tituloPagina', "Crear un nuevo Cliente")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar Mascota</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{route('mascotas.update',$mascota->id)}}" method="POST">
            @csrf
            @method("PUT")
            <label for="">ID</label>
            <input type="number" min="0" name="id" class="form-control" required value="{{$mascota->id}}">
            <label for="">Dueño</label>
            <select name="cli_masc" id="inputCli_masc" class="form-control">
              @foreach ($clientes as $cliente)
                <option value="{{$cliente['id']}}">{{$cliente['nom_ape_cli']}}</option>
              @endforeach
            </select>
            <label for="">Nombre</label>
            <input type="text" min="0" name="nom_masc" class="form-control" required value="{{$mascota->nom_masc}}">
            <label for="">Tipo</label>
            <select name="tipo_masc" id="inputTipo_masc" class="form-control">
              <option value="{{$mascota->tipo_masc}}">{{$mascota->tipo_masc}}</option>
              <option value="Perro">Perro</option>
              <option value="Gato">Gato</option>
              <option value="Conejo">Conejo</option>
              <option value="Caballo">Caballo</option>
            </select>
            <br>
            <button class="btn btn-info">
                Actualizar
            </button>
            <a href="{{route("mascotas.index")}}">Volver</a>
        </form>
      </p>
      
    </div>
  </div>
@endsection