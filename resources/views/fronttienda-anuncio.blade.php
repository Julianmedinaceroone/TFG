@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/') }}">

<div class="espacio1">
    <img src="{{ asset('images/') }}" class="bmw"> 

    <div class="espacio1dentro">
        <img src="{{ asset('images/') }}" class="faros"> 
        <h1>250€</h1>
        <button>Volver</button>
    </div>

    <div class="espacio2dentro">
        <h1>Faros delanteros leds</h1>
        <p>
            <strong>Faros delanteros compatibles con:</strong>

            Golf V
            Jetta II 03-08
            <strong>Especificaciones:</strong>
            
            <strong>Modelo:</strong>luz diurna
            <strong>Tecnología:</strong>XENON
            <strong>Tipo de lámpara:</strong>D2S/H1
            <strong>Color:</strong>vidrio transparente / fondo negro
            <strong>Preparado para regulación eléctrica:</strong>Si
            <strong>Homologación europea:</strong> Faros con E-Mark (Certificado europeo) grabado en el cristal.
            <strong>Montaje:</strong> Fácil instalación sin modificar nada en el vehículo.
            <strong>Kit completo:</strong> Kit compuesto por 2 faros, lado izquierdo y derecho.
            <strong>Garantía:</strong> Tiene una garantía de 3 años.
            Estos no son productos originales de la marca VOLKSWAGEN.
            El artículo ofrecido, solo es compatible para los modelos de vehículos descritos.
        </p>

    </div>

</div>

@endsection
