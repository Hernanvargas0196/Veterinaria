<?php

namespace App\Http\Controllers;

use App\Models\Citas;
use App\Models\Mascotas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    
    public function index(Request $request)
    {
        //
        $datos = Citas::all();
        return view('citas/inicio_citas', compact('datos'));
    }

    public function citas_fecha(Request $request)
    {
        $busqueda = $request->busqueda;
        $datos = Citas::where('fecha_cita','=', $busqueda)->get();
        return view('citas/citas_fecha', compact('datos'));
    }

    public function index_calendario()
    {   
        $mascotas = Mascotas::all();
        return view('citas/calendario', compact('mascotas'));
    }
    
    public function create()
    {
        //
        $mascotas = Mascotas::all();
        return view('citas/add_cita', compact('mascotas'));
    }

    
    public function store(Request $request)
    {
        //
        $citas = new Citas();
        $citas->id = $request->post('id');
        $citas->fecha_cita = $request->post('fecha_cita');
        $citas->hora_cita = $request->post('hora_cita');
        $citas->masc_cita = $request->post('masc_cita');
        $citas->save();

        return redirect()->route("citas.index")->with("success", "Cita agregada con exito!");

        print_r($_POST);
    }

    
    public function show($id)
    {
        //
        $cita = Citas::find($id);
        return view("citas/delete_cita", compact('cita'));
    }

    
    public function edit($id)
    {
        //
        $cita = Citas::find($id);
        $mascotas = Mascotas::all();
        return view("citas/update_cita", compact('cita', 'mascotas'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $cita = Citas::find($id);
        $cita->id = $request->post('id');
        $cita->fecha_cita = $request->post('fecha_cita');
        $cita->hora_cita = $request->post('hora_cita');
        $cita->masc_cita = $request->post('masc_cita');
        $cita->save();

        return redirect()->route("citas.index")->with("success", "Cita actualizada con exito!");
    }

    
    public function destroy($id)
    {
        //
        $cita = Citas::find($id);
        $cita->delete();

        return redirect()->route("citas.index")->with("success", "Cita eliminada con exito!");
    }
}
