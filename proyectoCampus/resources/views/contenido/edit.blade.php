@extends('layouts.app')

@section('content')
<a href=" {{ route('contenido.index') }} ">Volver</a>
<form method="POST" action="{{ route('contenido.update', $contenido->id) }}">
    @method('PUT')
    @csrf

    <label>Titulo:</label>
    <input type="text" name='titulo' value="{{ $contenido->titulo }}" />
    <label>Descripcion:</label>
    <input type="text" name='descripcion' value="{{ $contenido->descripcion }}" />
    <input type="submit" value="Update"/>
@endsection
