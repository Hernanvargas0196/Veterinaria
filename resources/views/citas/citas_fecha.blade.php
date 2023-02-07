@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
<div class="row">
    <div class="card">
        <div class="card-header">
          Veterinaria
        </div>
        <div class="card-body">
          <h5 class="card-title">Citas</h5>
          <hr>
          <div class="col-md-12 text-center mt-5">
            <form action="{{route('citas.citas_fecha')}}" method="GET" accept-charset="utf-8">
              <div class="row">
                <div class="col">
                  <input type="date" name="busqueda" class="form-control"  required>
                </div>
                <div class="col">
                  <button class="btn btn-info">Consultar</button>
                </div>
              </div>
            </form>
          </div>
          
          <p class="card-text">
                <div class="table table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>ID Cita</th>
                            <th>Fecha Cita</th>
                            <th>Hora Cita</th>
                            <th>Mascota</th>
                        </thead>

                        <tbody>
                          @foreach ($datos as $cita)
                              
                          
                              <tr>
                                  <td>{{$cita -> id}}</td>
                                  <td>{{$cita -> fecha_cita}}</td>
                                  <td>{{$cita -> hora_cita}}</td>
                                  <td>{{$cita -> masc_cita}}</td>
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