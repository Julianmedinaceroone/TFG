@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/') }}">

<div class="espacio1">
    <img src="{{ asset('images/') }}" class="cocheblancoia"> 
    <h1>Horario recepcion de vehiculo</h1> METER MECANICA TALLER
    <div class="espacio1dentro">
        9:00 - 11:00
    </div>
    <div class="espacio2dentro">
        11:00 - 13:00
    </div>
    <div class="espacio3dentro">
        13:00 - 15:00
    </div>
    <div class="espacio4dentro">
        16:00 - 18:00
    </div>
    <div class="espacio5dentro">
        18:00 - 20:00
    </div>
    <div class="espacio6dentro">
        20:00 - 22:00
    </div>
</div>

@endsection
