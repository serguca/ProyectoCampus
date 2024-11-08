<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;
use App\Http\Requests\ContenidoRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function toggleProfesor(User $user)
    {
        $user->esProfesor = !$user->esProfesor; // Cambia el estado de isProfesor
        $user->save();
        return redirect()->route('contenido.index');
    }

    
    public function invitarAlumno(User $user)
    {
        $profesor = Auth::user();
        // Validar que el profesor tiene el contenido
        $contenido = Contenido::where('user_id', $profesor->id)->first();
    
        if (!$contenido) {
            return redirect()->back()->with('error', 'Contenido no encontrado o no pertenece al profesor.');
        }
    
        // Asignar el contenido al alumno
        $contenido->user_id = $user->id;
        $contenido->save();
    
        return redirect()->route('contenido.index')->with('success', 'Contenido asignado al alumno correctamente.');
    }
    



/*
       $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();
*/
}
