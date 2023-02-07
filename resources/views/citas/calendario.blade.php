@extends('layouts/app')

@section('content')

    <div id="calendario">
        
    </div>
<!-- Button trigger modal -->
<button type="button" data-toggle="modal" data-target="#evento">
    
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
                  <button class="btn btn-primary">
                      Agregar
                  </button>
                  <a href="{{route("citas.index")}}"><i class="fa-solid fa-arrow-left-long"></a>
              </form>
        </div>

      </div>
    </div>
  </div>

@endsection