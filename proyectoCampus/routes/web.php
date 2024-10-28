<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;


Route::get('/contenido/{id}', [ContentController::class, 'index']) -> name('contenido.index');


