@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/') }}">

<div class="espacio1">
    <img src="{{ asset('images/') }}" class="audir8"> 
    
    <div class="espacio1dentro">
        <h1>Mensaje no guardado</h1>
        <button>Volver</button>
    </div>
    
</div>

@endsection
