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
        //Tambien funcionaria con:
        //Note::create($request->all());

        Contenido::create($request->all());

        return redirect()->route('contenido.index');
    }
}
