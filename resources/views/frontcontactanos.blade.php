@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/frontcontactanos.css') }}">

<div class="img">
    <img src="{{ asset('images/ia1.jpeg') }}" class="cocheblancoia"> 
</div>

<div class="espacio1">
        <h1 class="subrayado"><strong>Formulario</strong></h1>

        <form action="{{ route('ContactoFormulario') }}" method="POST">
            @csrf
            <h2>Nombre</h2>
            <input type="text" name="nombre" placeholder="Nombre">
            <h3>Tema</h3>
            <select name="tema" id="tema">
                <option value="Opción 1">Duda taller</option>
                <option value="Opción 2">Duda tunning</option>
                <option value="Opción 3">Duda tienda</option>
                <option value="Opción 4">Duda foro</option>
                <option value="Opción 5">Duda compraventa</option>
                <option value="Opción 6">Duda detailing</option>
                <option value="Opción 7">Busco trabajo</option>
            </select>
            <h4>Cuerpo</h4>
            <textarea name="cuerpo" placeholder="Cuerpo"></textarea>
            <h5>Correo</h5>
            <input type="email" name="correo" placeholder="Correo electrónico">
            <button type="submit">Enviar</button>
        </form>
        
    </div>
</div>

@endsection
