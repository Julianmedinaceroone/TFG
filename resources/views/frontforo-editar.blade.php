@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/') }}">

<div class="espacio1">
    <img src="{{ asset('images/') }}" class="audir8"> 
    <h1>Editar tus mensajes</h1>
    <div class="espacio1dentro">
        <h1>Nombre</h1>
        <h1>Texto</h1>
        INSERTAR ESPACIOS RELLENABLES
        <img src="{{ asset('images/') }}" class="mercedes"> 
        <button>Volver</button>
        <button>Guardar</button>
    </div>
</div>

@endsection
