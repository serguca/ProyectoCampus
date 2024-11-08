@extends('layouts.app')

@section('content')
<div class="page">
    <div class="botonCreate">
        <a  class="create" href="{{ route('contenido.create') }}">Create new contenido</a>
    </div>
    <div class="centrarLista">
        <ul>
            <p class="bienvenido">Bienvenido, {{ $user->name }}</p> <!-- Muestra el nombre del usuario -->

            @if($user -> esProfesor)
                <p class="tipoUsuario">Usted es profesor.</p>
            @else

            <p class="tipoUsuario">Usted no es profesor.</p>

            @endif

            <form class="cerrarSesion" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="botonCerrarSesion">
                    {{ __('Cerrar sesión') }}
                </button>
            </form>

            <form class="cambio" method="POST" action="{{ route('user.toggleProfesor', $user -> id) }}">
                @csrf
                <button type="submit" class="botonCambio">
                    {{ $user -> esProfesor ? 'Cambiar a Estudiante' : 'Cambiar a Profesor' }}
                </button>
            </form>

            @forelse($contenidos as $contenido)
                @if($user -> esProfesor && $contenido -> user_id == $user -> id)

                <li class="lists">
                    <div class="containerContenidoTitulo">
                        <a class="contenidoTitulo" href="{{ route('contenido.show', $contenido -> id)}}">{{$contenido -> titulo}}</a>
                    </div>

                    <form action="{{route('contenido.edit', $contenido ->id )}}">
                        @csrf
                        <input type="submit" value="EDIT">
                    </form>

                    <form method="POST" action="{{ route('contenido.destroy', $contenido->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>
                </li>

                @elseif(!$user->esProfesor && $contenido -> user_id == $user -> id)
                <li><a href="{{ route('contenido.show', $contenido -> id)}}">{{$contenido -> titulo}}</a></li>
                @endif
                @empty
                    <p>No hay contenidos</p>
            @endforelse
        </ul>
    </div>
</div>


<style>

<style>
@endsection

