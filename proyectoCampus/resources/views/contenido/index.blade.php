@extends('layouts.app')

@section('content')
<a href="{{ route('contenido.create') }}">Create new contenido</a>

<ul>
    <p>Bienvenido, {{ $user->name }}</p> <!-- Muestra el nombre del usuario -->
    @if($user -> esProfesor)
        <p>Usted es profesor.</p>
    @else
        <p>Usted no es profesor.</p>
    @endif

    <form method="POST" action="{{ route('user.toggleProfesor', $user -> id) }}">
        @csrf
        <button type="submit" class="btn btn-primary">
            {{ $esProfesor ? 'Cambiar a Estudiante' : 'Cambiar a Profesor' }}
        </button>
    </form>

    @forelse($contenidos as $contenido)
        <li><a href="{{ route('contenido.show', $contenido -> id)}}">{{$contenido -> titulo}}</a>
        @if($user -> esProfesor && $contenido -> user_id == $user -> id)
            <a href="{{route('contenido.edit', $contenido ->id )}}">EDIT</a>
            <form method="POST" action="{{ route('contenido.destroy', $contenido->id) }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="DELETE">
        </li>
        </form>
        @else
        @endif

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
