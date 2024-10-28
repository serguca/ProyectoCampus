<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index($id){
        return view('contenido.index', compact('id'));
    }
}
