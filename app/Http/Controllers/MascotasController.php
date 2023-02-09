<?php

namespace App\Http\Controllers;

use App\Models\Mascotas;
use App\Models\Clientes;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    
    public function index()
    {
        //
        $datos = Mascotas::all();
        $clientes = Clientes::all();
        return view('mascotas/inicio_masc', compact('datos', 'clientes'));
    }

    
    public function create()
    {
        //Formulario mascotas
        $clientes = Clientes::all();
        return view('mascotas/add_masc', compact('clientes'));
    }

   
    public function store(Request $request)
    {
        //
        $mascotas = new Mascotas();
        $mascotas->id = $request->post('id');
        $mascotas->cli_masc = $request->post('cli_masc');
        $mascotas->nom_masc = $request->post('nom_masc');
        $mascotas->tipo_masc = $request->post('tipo_masc');
        $mascotas->save();

        return redirect()->route("mascotas.index")->with("success", "Mascota gregada con exito!");


        print_r($_POST);
    }

    
    public function show($id)
    {
        //
        $mascota = Mascotas::find($id);
        return view("mascotas/delete_masc", compact('mascota'));
    }
 
    
    public function edit($id)
    {
        //
        $mascota = Mascotas::find($id);
        $clientes = Clientes::all(); 
        return view("mascotas/update_masc", compact('mascota', 'clientes'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $mascota = Mascotas::find($id);
        $mascota->id = $request->post('id');
        $mascota->cli_masc = $request->post('cli_masc');
        $mascota->nom_masc = $request->post('nom_masc');
        $mascota->tipo_masc = $request->post('tipo_masc');
        $mascota->save();

        return redirect()->route("mascotas.index")->with("success", "Mascota actualizada con exito!");
    }

    
    public function destroy($id)
    {
        //
        $mascota = Mascotas::find($id);
        $mascota->delete();

        return redirect()->route("mascotas.index")->with("success", "Mascota eliminada con exito!");

    }
}
