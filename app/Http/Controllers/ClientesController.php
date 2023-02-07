<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    
    public function index(Request $request)
    {
        //Pagina de inicio
        //
        $datos = Clientes::all();
        return view('clientes/inicio_cli', compact('datos'));
    }

    
    public function create()
    {
        //Formulario 
        return view('clientes/add_cli');
    }

    
    public function store(Request $request)
    {
        //Guardar datos en la BD
        $clientes = new Clientes();
        $clientes->id = $request->post('id');
        $clientes->nom_ape_cli = $request->post('nom_ape_cli');
        $clientes->cel_cli = $request->post('cel_cli');
        $clientes->email_cli = $request->post('email_cli');
        $clientes->save();

        return redirect()->route("clientes.index")->with("success", "Cliente agregado con exito!");

        print_r($_POST);
    }

   
    public function show($id)
    {
        //Obtener un registro de la tabla
        $cliente = Clientes::find($id);
        return view("clientes/delete_cli", compact('cliente'));    
    }

    
    public function edit($id)
    {
        //Traer datos a editar
        
        $cliente = Clientes::find($id);
        return view("clientes/update_cli", compact('cliente'));
        
    }

    
    public function update(Request $request, $id)
    {
        //Actualiza los datos en la BD
        $cliente = Clientes::find($id);
        $cliente->id = $request->post('id');
        $cliente->nom_ape_cli = $request->post('nom_ape_cli');
        $cliente->cel_cli = $request->post('cel_cli');
        $cliente->email_cli = $request->post('email_cli');
        $cliente->save();

        return redirect()->route("clientes.index")->with("success", "Cliente actualizado con exito!");

    }

    
    public function destroy($id)
    {
        //Eliminar registro
        $cliente = Clientes::find($id);
        $cliente->delete();

        return redirect()->route("clientes.index")->with("success", "Cliente eliminado con exito!");

    }
}
