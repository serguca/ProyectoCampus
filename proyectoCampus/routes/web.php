<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenidoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contenido', [ContenidoController::class, 'index'])->name('contenido.index');
Route::get('/contenido/create', [ContenidoController::class, 'create'])->name('contenido.create');
Route::post('/contenido/store', [ContenidoController::class, 'store'])->name('contenido.store');
Route::get('/contenido/edit/{contenido}', [ContenidoController::class, 'edit'])->name('contenido.edit');
Route::put('/contenido/update/{contenido}', [ContenidoController::class, 'update'])->name('contenido.update');
Route::get('/contenido/show/{contenido}', [ContenidoController::class, 'show'])->name('contenido.show');
Route::delete('/contenido/destroy/{contenido}', [ContenidoController::class, 'destroy'])->name('contenido.destroy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
