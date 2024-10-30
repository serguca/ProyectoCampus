<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;


Route::get('/content', [ContentController::class, 'index']) -> name('content.index');

Route::get('/content/{id}', [ContentController::class, 'show']) -> name('content.show');


