@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/fronttaller.css') }}"> 

<script src="https://cdn.tailwindcss.com"></script> <!-- carrousel -->

<carrousel>
    <div class="max-w-screen-3xl mx-auto">
        <div id="default-carousel" class="relative w-full" data-carousel="static">
         
            <div class="overflow-hidden relative h-screen">
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="{{ asset('images/porche.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-cover" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/maserati.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-cover" alt="...">
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


<div class="espacio">
    <div class="coche">
        <img src="{{ asset('images/cuupra.jpg') }}" class="coche">
    </div>

    <h2 class="subrayado"><strong>Mecánica general</strong></h2>
    <p class="primero">Si necesitas arreglar cualquier parte/pieza de tu vehículo</p>
    <p class="segundo">o prepararlo para la itv, no dudes en pedir cita</p>
    <br><br><br><br>
    <a href="{{ route('fronttaller-lugar') }}" class="button">Citas</a>
</div>

<div class="espacio">
    <div class="coche">
        <img src="{{ asset('images/seatleon2.jpg') }}" class="coche">
    </div>

    <h2 class="subrayado"><strong>Tunning</strong></h2>
    <p class="primero">Si quieres modificar tu vehículo, homologarlo y ir legal</p>
    <p class="segundo">o incluso prepararlo para circuito pide cita</p>
    <br><br><br><br>
    <a href="{{ route('fronttaller-lugar') }}" class="button">Citas</a>

</div>

<div class="espacio">
    <div class="coche">
        <img src="{{ asset('images/lambo.jpg') }}" class="coche">
    </div>

    <h2 class="subrayado"><strong>Detailing</strong></h2>
    <p class="primero">Si quieres dejar tu coche impoluto o realizar</p>
    <p class="segundo">una limpieza general o básica pide tu cita</p>
    <br><br><br><br>
    <a href="{{ route('fronttaller-lugar') }}" class="button">Citas</a>

</div>


@endsection
