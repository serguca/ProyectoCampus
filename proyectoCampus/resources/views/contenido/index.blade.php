@extends('layouts.app')

@section('content')
<a href="{{ route('contenido.create') }}">Create new contenido</a>

<ul>
    @forelse($contenidos as $contenido)
        <li><a href='#'>{{$contenido -> titulo}}</a> | <a href="{{route('contenido.edit', $contenido ->id )}}">EDIT</a> | <a href="#">DELETE</a> </li>
    @empty
            <p>No hay contenidos</p>
    @endforelse
</ul>
@endsection
