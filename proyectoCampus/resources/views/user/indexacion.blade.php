@extends('layouts.app')

@section('content')
<div class="usuarios">
@foreach($users as $user)
    <a>{{ $user->name }}</a>
    <form class="cambio" method="POST" action="{{ route('user.invitarAlumno', ['contenido' => $contenido->id, 'user' => $user->id]) }}">
        @csrf
        <button type="submit" class="botonCambio">
            {{ 'Invitar' }}
        </button>
    </form>
@endforeach
</div>

<style>
.usuarios{
    display: inline;
}
a{
    display:flex;
    flex-direction: column;
    justify-content: center;
    color: white;
}
</style>

@endsection

