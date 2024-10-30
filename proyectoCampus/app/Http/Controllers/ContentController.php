<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    //Crear contenido
    public function createContent(){
        
        return view('contenido.index', compact('id'));
    }

    //Guardar contenido
    public function store(){

        return view('contenido.index', compact('id'));
    }

    //show all content
    public function index(){

        return view('contenido.index', compact('id'));
    }
    //show one content
    public function show($id){

        return view('contenido.index', compact('id'));
    }
    
}
