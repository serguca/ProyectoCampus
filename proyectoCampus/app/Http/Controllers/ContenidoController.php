<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;

class ContenidoController extends Controller
{
    //$note = Contenido::find($id);

    //Devuelve la vista index (la principal)
    public function index(){
        $contenidos = Contenido::all();
        return view('contenido.index', compact('contenidos'));
    }

    //Devuelve la vista create
    public function create(){
        return view('contenido.create');
    }

    //Guarda en la base de datos el contenido del formulario
    public function store(Request $request){
        Contenido::create($request->all());

        return redirect()->route('contenido.index');
    }

    public function edit(Contenido $contenido){
        //$Contenido = Contenido::find($contenido);
        return view('contenido.edit', compact('contenido'));
    }

    public function update(Request $request, Contenido $contenido){
        $contenido->update($request->all());
        return redirect()->route('contenido.index');
    }

    public function show(Contenido $contenido){
        return view('contenido.show', compact('contenido'));
    }

    public function destroy(Contenido $contenido){
        $contenido->delete();
        return redirect()->route('contenido.index');
    }
}
