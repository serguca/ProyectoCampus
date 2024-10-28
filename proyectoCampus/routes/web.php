<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenidoController;


Route::get('/contenido/{id}', [ContenidoController::class, 'index']) -> name('contenido.index');


