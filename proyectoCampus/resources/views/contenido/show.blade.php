@extends('layouts.app')

@section('content')
<div class="body">

    <div class="contenido-back">
        <a class="back" href="{{ route('contenido.index') }}">BACK</a>
    </div>
    
    <div class="Contenido-contenido">
        <h1>Nombre contenido: <br>{{$contenido -> titulo}}</h1>
        <h2>Descripción</h2>
        <p>{{$contenido -> descripcion}} <br> </p>
    </div>

</div>

<style>
    .body{
        width: 80%;
        margin: 0 auto;
    }

    .contenido-back{
       
    }

    .back{
       
    }

    .Contenido-contenido{
        overflow-wrap: break-word;
        background: linear-gradient(to right, #ffffff, #ffffff);
        padding: 20px;
    }

    h1{
        color: #183fb37a;
        text-align: center
    }

    h2{
        color: #721c24;
        text-align: center
    }

    p{
       
      
    }


</style>
@endsection

