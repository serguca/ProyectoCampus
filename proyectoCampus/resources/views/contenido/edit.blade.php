@extends('layouts.app')

@section('content')
<form method="POST" action=#>
    @csrf
    <label>Titulo:</label>
    <input type="text" name='titulo' value={{ $contenido->titulo }} />
    <label>Descripcion:</label>
    <input type="text" name='descripcion' value={{ $contenido->descripcion }} />
    <input type="submit" value="Update"/>
@endsection
