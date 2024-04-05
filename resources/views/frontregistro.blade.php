@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/frontcontactanos.css') }}">

<div class="img">
    <img src="{{ asset('images/celesteia.jpg') }}" class="cochecelesteia"> 
</div>

<div class="espacio1">
        <h1 class="subrayado"><strong>Registro</strong></h1>

        <form action="{{ route('UsuariosFormulario') }}" method="POST">
            @csrf
            <h9>Nombre</h9>
            <input type="nombreregistro" name="name" placeholder="Nombre">
            <h10>Correo</h10>
            <input type="emailregistro" name="email" placeholder="Correo electrónico">
            <h11>Contraseña</h11>
            <input type="textregistrocontra" name="password" placeholder="Contraseña">
            <h12>Contraseña</h12>
            <input type="textregistrocontrarepetir" name="contraseña" placeholder="Repetir Contraseña">
            <button type="submit" class="registrobutton">Registrarse</button>
        </form>
        
    </div>
</div>

@endsection
