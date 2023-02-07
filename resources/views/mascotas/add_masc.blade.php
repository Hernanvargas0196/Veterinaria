@extends('layout/plantilla')

@section('tituloPagina', "Crear una nueva Mascota")
<head>
    <meta name="viewport" content="width=device-width">
</head>

@section('contenido')
<div class="card">
    <h5 class="card-header">Agregar Mascota</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{route('mascotas.store')}}" method="POST">
          @csrf
            <label for="">ID mascota</label>
            <input type="number" min="0" name="id" class="form-control" placeholder="N Identificacion" required>
            <label for="">Dueño</label>
            <select name="cli_masc" id="inputCli_masc" class="form-control">
              @foreach ($clientes as $cliente)
                <option value="{{$cliente['id']}}">{{$cliente['nom_ape_cli']}}</option>
              @endforeach
            </select>
            <label for="">Nombre</label>
            <input type="text" min="0" name="nom_masc" class="form-control" required>
            <label for="">Tipo</label>
            <select name="tipo_masc" id="inputTipo_masc" class="form-control">
              <option value="Perro">Perro</option>
              <option value="Gato">Gato</option>
              <option value="Conejo">Conejo</option>
              <option value="Caballo">Caballo</option>
            </select>
            <br>
            <a href="{{route("mascotas.index")}}"><i class="fa-solid fa-arrow-left-long"></i></a>
            <hr>
            <button class="btn btn-primary">
              <i class="fa-solid fa-check"></i>
            </button>
            
        </form>
      </p>
      
    </div>
  </div>
@endsection