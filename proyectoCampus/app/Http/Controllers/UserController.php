<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;
use App\Http\Requests\ContenidoRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function indexacion($contenido){
        $contenido = Contenido::find($contenido);
        if(Auth::user()->id == $contenido->user->id){
            $users = User::all();
            $myUser = Auth::user();
            return view('user.indexacion', compact('users', 'contenido', 'myUser'));
        } else {
            return redirect()->route('contenido.index');
        }
    }

    public function toggleProfesor(User $user)
    {
        $user->esProfesor = !$user->esProfesor; // Cambia el estado de isProfesor
        $user->save();
        return redirect()->route('contenido.index');
    }

    public function invitarAlumno($contenido, $user){ //el user es el alumno
        $user = User::find($user);
        if(Auth::user()->id == $user->id){
            $contenido = Contenido::find($contenido);
            $contenido->users()->attach($user);
            return redirect()->route('user.indexacion', $contenido);
        } else {
            return redirect()->route('user.indexacion', $contenido);
        }
    }





/*
       $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();
*/
}
