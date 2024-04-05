@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/frontdetailing.css') }}">

<script src="https://cdn.tailwindcss.com"></script> <!-- carrousel -->

<carrousel>
    <div class="max-w-screen-3xl mx-auto">
        <div id="default-carousel" class="relative w-full" data-carousel="static">
         
            <div class="overflow-hidden relative h-screen">
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="{{ asset('images/detailing.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-cover" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/detailing 2.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-cover" alt="...">
                </div>
            
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                </div>
               
                <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30  group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Anterior</span>
                    </span>
                </button>
                <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Siguiente</span>
                    </span>
                </button>
            </div>

            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
    </div>
</carrousel>


<div class="espacio1">
    <br><br>
    <h1><strong>¿Qué es detailing?</strong></h1>
    <br>
    <p><strong>Es el conjunto de técnicas centradas en la limpieza</strong></p>
    <p><strong>perfecta del vehículo sin causar deterioro de los</strong></p>
    <p><strong>materiales que lo componen. Es más, se encarga de </strong></p>
    <p><strong>solucionar defectos estéticos y proteger el auto ante</strong></p> 
    <p><strong>la mayoría de las agresiones externas</strong></p>
    <br><br>
    <div class="volante">
        <img src="{{ asset('images/detailing3.png') }}" class="volante">
    </div>
</div>


<div class="espacio2">
    <h1 class="subrayado"><strong>SERVICIOS</strong></h1>

    <div class="cochepintaoia">
        <img src="{{ asset('images/cochepintaoia.jpg') }}" class="cochepintaoia"> 
    </div>

    <div class="limpiezauno">
        <h2>Limpieza básica Coste: 25€</h2>
        <p>Descripción: Limpieza de alfombrillas y por fuera, limpieza de llantas, revisión de líquidos y pulimento de faros</p>
    </div>

    <div class="limpiezados">
        <h2>Limpieza general Coste: 50€</h2>
        <p>Descripción: Limpieza básica + pulimento y enceramiento de vehículo</p>
    </div>

    <div class="limpieza">
        <h2>Limpieza profesional Coste: 75€</h2>
        <p>Descripción: Limpieza general + acabado interior y exterior igual al de concesionario</p>
    </div>
</div>



<div class="espacio3">
    <div class="fondo">
        <div class="detailing">
            <img src="{{ asset('images/dt.jpg') }}" class="detailing"> 
        </div>

        <h1 class="subrayado"><strong>¿Por qué nosotros?</strong></h1>

        <div class="bloqueuno">
            <p>Somos expertos en</p>
            <p>coches y limpieza</p>

            <div class="diamante">
                <img src="{{ asset('images/diamante.png') }}" class="diamante"> 
            </div>

        </div>
    
        <div class="bloquedos">
            <p>Tenemos el mejor</p>
            <p>material para dar la</p>
            <p>mejor calidad</p>

            <div class="cascos">
                <img src="{{ asset('images/cascos.png') }}" class="cascos">
            </div>
            
        </div>

        <div class="bloquetres">
            <p>Garantizamos</p>
            <p>servicio profesional</p>

            <div class="personas">
                <img src="{{ asset('images/personas.png') }}" class="personas">
            </div>

            
        </div>   
    </div>
  
</div>


@endsection
