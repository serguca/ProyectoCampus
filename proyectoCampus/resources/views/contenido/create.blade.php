@extends('layouts.app')

@section('content')
<a href="{{ route('contenido.index') }}">Atras</a>
<form method='POST' action={{ route('contenido.store')}}>
    @csrf
    <label>Titulo:</label>
    <input type="text" name='titulo' />

    <label>Descripcion:</label>
    <input type="text" name='descripcion' />

    <input type="submit" value="Create"/>

</form>
@endsection
