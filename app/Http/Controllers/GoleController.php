<?php

namespace App\Http\Controllers;

use App\Models\Gole;
use Illuminate\Http\Request;

class GoleController extends Controller
{
    public function create()
    {
        return view('gol.create');
    }

    public function store(Request $request)
    {
        $gole = new Gole();
        $gole->minuto = $request->input('minuto');
        $gole->descripcion = $request->input('descripcion');
        $gole->codigo = $request->input('codigo');
       
        $gole->save();
        
        return $gole;
    }

    public function index()
    {
        $gole = Gole::orderBy('id', 'desc')->get();
        return view('pago.listar', compact('pago'));
    }

    public function show(Gole $gole) {
        return view('pago.show', compact('pago'));
    }

    public function destroy(Gole $gole) {
        $gole->delete();
        return redirect()->route('pago.index');
    }

    public function edit (Gole $gole){
    
        return view ('pago.edit',compact('pago'));

    }

    public function update(Request $request,Gole $gole ){

       
        $gole->minuto = $request->input('minuto');
        $gole->descripcion = $request->input('descripcion');
        $gole->codigo = $request->input('codigo');
        $gole->save();
        return redirect()->route('pago.index');

    }
}
