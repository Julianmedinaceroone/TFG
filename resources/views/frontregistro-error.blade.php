@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/frontcontactanos.css') }}">


<div class="img">
    <img src="{{ asset('images/celesteia.jpg') }}" class="cochecelesteia"> 
</div>

<div class="espacio1">
        <br><br><br><br>
        <h1 class="subrayado2"><strong>Correo o contraseña invalidos</strong></h1>
        <a href="{{ route('frontregistro') }}" class="button2">Volver</a>
</div>



@endsection
