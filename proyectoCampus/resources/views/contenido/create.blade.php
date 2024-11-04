@extends('layouts.app')

@section('content')
<a href="{{ route('contenido.index') }}">Atras</a>
<form method='POST' action={{ route('contenido.store')}}>
    @csrf
    <label>Titulo:</label>
    <input type="text" name='titulo' />

    @error('titulo')
        <p style="color:crimson">{{$message}}</p>
    @enderror

    <label>Descripcion:</label>
    <input type="text" name='descripcion' />

    @error('descripcion')
        <p style="color:crimson">{{$message}}</p>
    @enderror

    <input type="submit" value="Create"/>

</form>
@endsection
