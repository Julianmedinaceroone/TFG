@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/') }}">

<div class="espacio1">
    <img src="{{ asset('images/') }}" class="cocheblancoia"> 
    <div class="espacio1dentro">
        <h1>Pide cita</h1>
        <h2>Nombre</h2>
        <h2>Talleres</h2>
        <h2>Cuerpo</h2>
        <h2>Teléfono</h2>
        RELLENAR HUEQUITOS
        <button>Enviar</button>
    </div>
</div>

@endsection
