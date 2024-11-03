@extends('layouts.app')

@section('content')
<a href="{{ route('contenido.create') }}">Create new note</a>

<ul>
    @forelse($contenidos as $contenido)
        <li><a href='#'>{{$contenido -> titulo}}</a> | <a href="#">EDIT</a> | <a href="#">DELETE</a> </li>
    @empty
            <p>No hay contenidos</p>
    @endforelse
</ul>
@endsection
