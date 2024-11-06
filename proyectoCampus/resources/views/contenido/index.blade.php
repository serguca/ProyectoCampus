@extends('layouts.app')

@section('content')
<a href="{{ route('contenido.create') }}">Create new contenido</a>

<ul>
    <p>Bienvenido, {{ $user->name }}</p> <!-- Muestra el nombre del usuario -->

    @forelse($contenidos as $contenido)
        <li><a href="{{ route('contenido.show', $contenido -> id)}}">{{$contenido -> titulo}}</a> | <a href="{{route('contenido.edit', $contenido ->id )}}">EDIT</a>
        <form method="POST" action="{{ route('contenido.destroy', $contenido->id) }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE">
        </li>
        </form>
        @empty
            <p>No hay contenidos</p>
    @endforelse

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
            {{ __('Cerrar sesión') }}
        </button>
    </form>
</ul>
@endsection
