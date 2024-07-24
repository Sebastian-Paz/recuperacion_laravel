<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre = $request->input('telefono');
        $cliente->num_social = $request->input('num-social');
        $cliente->codigo = $request->input('codigo');
        $cliente->domicilio = $request->input('domicilio');
       
        $cliente->save();
        
        return $cliente;
    }

    public function index()
    {
        $cliente = Cliente::orderBy('id', 'desc')->get();
        return view('cliente.listar', compact('cliente'));
    }

    public function show(Cliente $cliente) {
        return view('cliente.show', compact('cliente'));
    }

    public function destroy(Cliente $cliente) {
        $cliente->delete();
        return redirect()->route('cliente.index');
    }

    public function edit (Cliente $cliente){
    
        return view ('cliente.edit',compact('cliente'));

    }

    public function update(Request $request,Cliente $cliente ){

       
        $cliente->telefono = $request->input('nombre');
        $cliente->num_social = $request->input('num_social');
        $cliente->codigo = $request->input('codigo');
        $cliente->domicilio = $request->input('domicilio');
        $cliente->save();
        return redirect()->route('cliente.index');

    }
}
