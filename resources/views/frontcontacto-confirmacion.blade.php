@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/frontcontactanos.css') }}">


<div class="img">
    <img src="{{ asset('images/ia1.jpeg') }}" class="cocheblancoia"> 
</div>

<div class="espacio4">
        <br><br><br><br>
        <h1 class="subrayado2"><strong>Se ha enviado correctamente!</strong></h1>
        <a href="{{ route('frontcontactanos') }}" class="button2">Volver</a>
</div>



@endsection
