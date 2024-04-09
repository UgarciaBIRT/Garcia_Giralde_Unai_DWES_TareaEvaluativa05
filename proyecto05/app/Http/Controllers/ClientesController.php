<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = clientes::all();

        return $clientes;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return View::make('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cliente = new clientes;
        //$cliente->nombre = Input::get("nombre");
        //$cliente->apellido1 = Input::get("apellido1");
        //$cliente->apellido2 = Input::get("apellido2");
        $cliente->nombre = $request->input("nombre");
        $cliente->apellido1 = $request->input("apellido1");
        $cliente->apellido2 = $request->input("apellido2");
        $cliente->save();
        echo "Se ha guardado el cliente, datos:\n";
        echo $cliente->nombre;
        echo $cliente->apellido1;
        echo $cliente->apellido2;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cliente = clientes::find($id);
        return $cliente;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $cliente = clientes::find($id);

        return View::make('clientes.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $cliente = clientes::find($request->input("id"));
        $cliente->nombre = $request->input("nombre");
        $cliente->apellido1 = $request->input("apellido1");
        $cliente->apellido2 = $request->input("apellido2");
        $cliente->save();
        echo "Se ha editado el cliente, datos:\n";
        echo $cliente->nombre;
        echo $cliente->apellido1;
        echo $cliente->apellido2;
    }

    /**
     * Show form to remove specified resource from storage
     */
    public function destroy(string $id)
    {
        //
        return View::make('clientes.destroy')->with('id', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        //
        $clientes = clientes::find($request->input("id"));
        return $clientes->delete();
    }
}
