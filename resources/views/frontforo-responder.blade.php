@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/') }}">

<div class="espacio1">
    <img src="{{ asset('images/') }}" class="audir8"> 
    <div class="espacio1dentro">
        <h1>Armando Bronca Seguro</h1>
        <p>El otro día me compra un tesla y sin duda lo peor que hize, no tengo donde cargar el tesla en ningun lado, la gente me pinta lavadora con boli en la carroceria, el otro día casi explota en el garaje, sin duda no os compreis ninguno.</p>
        <img src="{{ asset('images/') }}" class="tesla"> 
    </div>
    ESPACIO RELLENABLE
    <button>Volver</button>
    <button>Guardar</button>
</div>

@endsection
