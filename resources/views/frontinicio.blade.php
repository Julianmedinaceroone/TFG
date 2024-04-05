@extends('layouts.plantilla')


@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/frontinicio.css') }}">

<script src="https://cdn.tailwindcss.com"></script> <!-- carrousel -->


<carrousel>
    <div class="max-w-screen-3xl mx-auto">
        <div id="default-carousel" class="relative w-full" data-carousel="static">
         
            <div class="overflow-hidden relative h-screen">
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="{{ asset('images/golf5delante.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-cover" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/golf5detras.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-cover" alt="...">
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
    <h1><strong>¿Quiénes somos?</strong></h1>
    <br>
    <p><strong>Taller de mecánica especializado en coches y famoso por su gran</strong></p>
    <p><strong>variación de opciones como tunning, tienda de repuestos, foro, etc.</strong></p>
    <p><strong>Taller a nivel nacional, traenos tu coche y lo haremos el de tus sueños.</strong></p>
    <br><br>
    <a href="{{ route('frontmoodboard') }}" class="button">Moodboard</a>
    <br><br>
    <div class="img">
        <img src="{{ asset('images/golf 7.jpg') }}" class="golf7">
    </div>
    
</div>


<div class="espacio2">

    <i class="fa-solid fa-clone"></i>
    
    <h1> <strong>Valoraciones</strong></h1>
    <p class="uno">Tenemos 80% de valoraciones</p>
    <p class="dos"> de 5 estrellas </p>

    <div class="comment1">
        <h2>Luis Alberto Dominguez</h2>
        <p class="comment-text">Traje mi coche a este taller y han hecho mi sueño realidad</p>
        <p class="comment-text">de tener un coche homologado tuneado y todo legal</p>
    </div>

    <div class="comment2">
        <h2>Francisco Perales Barejo</h2>
        <p class="comment-text">Traje el coche para prepararlo profesionalmente</p>
        <p class="comment-text">y no lo reconozco, corre mucho más</p>
    </div>

    <div class="comment3">
        <h2>Carlos Alcorcon Bronca</h2>
        <p class="comment-text">Soy piloto de carreras profesional de rally</p>
        <p class="comment-text">traigo el coche todos los años a este taller</p>
    </div>


    <div class="img1">
    <img src="{{ asset('images/honmda.jpg') }}" class="hondarojo"> 
    </div>

    <div class="rating">
        <span class="star">☆</span>
        <span class="star">☆</span>
        <span class="star">☆</span>
        <span class="star">☆</span>
        <span class="star">☆</span>
    </div>

    <div class="img2">
    <img src="{{ asset('images/valoraciones.png') }}" class="valoraciones"> 
    </div>

</div>


<div class="espacio3">
    <video autoplay muted loop width="640" height="360">
        <source src="{{ asset('images/videogtr.mp4') }}" type="video/mp4">
    </video>
</div>




<div class="espacio4">

    <div class="rx7">
    <img src="{{ asset('images/rx7.jpg') }}" class="rx7"> 
    </div>

        <div class="espacio4dentro">
            <h1 class="subrayado">SERVICIOS</h1>
            
            <div class="tunning">
                <h2><strong>TUNNING</strong></h2>
                <a href="{{ route('fronttunning') }}">
            <img src="{{ asset('images/barraestadistica.png') }}" class="barraestadistica">
            </div>

            <div class="detailing">
                <h2><strong>DETAILING</strong></h2>
                <a href="{{ route('frontdetailing') }}">
            <img src="{{ asset('images/emblema.png') }}" class="emblema"> 
            </div>

            <div class="mecanica">
                <h2><strong>MECANICA</strong></h2>
                <a href="{{ route('fronttaller') }}">
            <img src="{{ asset('images/tuerca.png') }}" class="tuerca">  
            </div>
        </div> 
</div>

@endsection
