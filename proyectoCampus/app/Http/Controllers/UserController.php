<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use Illuminate\Http\Request;
use App\Http\Requests\ContenidoRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function toggleProfesor(User $user, Request $request)
    {
        $user->isProfesor = !$user->isProfesor; // Cambia el estado de isProfesor
        $user->save();

        return redirect()->route('contenido.index');
    }

/*
       $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();
*/
}
