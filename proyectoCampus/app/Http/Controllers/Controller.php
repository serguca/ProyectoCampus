<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    public function index(){
        $user = Auth::user(); // Obtén el usuario autenticado
        $esProfesor = $user->esProfesor; // Accede a la variable esProfesor
        return view('contenido.index', compact('user', 'esProfesor'));
    }
}
