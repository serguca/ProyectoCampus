<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;
use App\Http\Requests\ContenidoRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContenidoController extends Controller
{
    //$note = Contenido::find($id);

    //Devuelve la vista index (la principal)
    public function index(){
        $contenidos = Contenido::all();
        $user = Auth::user(); // Obtén el usuario autenticado
        $esProfesor = $user->esProfesor; // Accede a la variable esProfesor
        return view('contenido.index', compact('contenidos', 'user', 'esProfesor'));
    }

    //Devuelve la vista create
    public function create(){
        return view('contenido.create');
    }

    //Guarda en la base de datos el contenido del formulario
    public function store(ContenidoRequest $request){
        $user = Auth::user();
        if(!$user->esProfesor){
            return redirect()->route('contenido.index');
        } else {
            $contenido = new Contenido($request->all());
            $contenido->user_id = Auth::id();
            $contenido->save();
            return redirect()->route('contenido.index');
        }
    }

    public function edit(Contenido $contenido){
        //$Contenido = Contenido::find($contenido);
        return view('contenido.edit', compact('contenido'));
    }

    public function update(ContenidoRequest $request, Contenido $contenido){
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
