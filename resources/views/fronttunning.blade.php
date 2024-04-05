@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/fronttunning.css') }}">

<script src="https://cdn.tailwindcss.com"></script> <!-- carrousel -->

<carrousel>
    <div class="max-w-screen-3xl mx-auto">
        <div id="default-carousel" class="relative w-full" data-carousel="static">
         
            <div class="overflow-hidden relative h-screen">
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">Primer Slide</span>
                    <img src="{{ asset('images/mustangg.png') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-cover" alt="...">
                </div>
               
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('images/bmw.jpg') }}" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-cover" alt="...">
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
    <h1><strong>¿Qué es para nosotros el tunning?</strong></h1>
    <br>
    <p><strong>Es una manera creativa de darle tu sello personal a tu vehículo</strong></p>
    <p><strong>y ponerlo como el de tus sueños. En este taller lo conseguirás</strong></p>
    <p><strong>y además de manera legal y todo homologado</strong></p>
    <br><br>
    <div class="img">
        <img src="{{ asset('images/mustang.png') }}" class="mustanggt">
    </div>
</div>

<div class="espacio2">
    <h1 class="subrayado"><strong>Reprogramaciones y coding</strong></h1>
    <p>Puedes hacer cualquier tipo de reprogramación y coding en nuestro taller</p>
    <h2 class='stageuno'>Stage 1:150€</h2>
    <h2 class='stagedos'>Stage 2:200€</h2>
    <h2 class='stagetres'>Stage 3:350€</h2>

    <div class="coche">
        <img src="{{ asset('images/golf7r.png') }}" class="coche">
    </div>

    <div class="grafica1">
        <img src="{{ asset('images/grafica.png') }}" class="grafica1">
    </div>
</div>

<div class="espacio3">
    <br><br><br>
    <h1 class="subrayado"><strong>Homologaciones</strong></h1>
    <br><br><br><br><br>
    <p>Una vez nuestros ingenieros hayan revisado su vehículo y esté todo</p>
    <p>perfecto, obtendrás tu certificado de homologación para tu vehículo</p>
    <p>en nuestra sucursal</p>

    <div class="seatleondetras">
        <img src="{{ asset('images/seatleon.jpg') }}" class="seatleondetras">
    </div>

    <div class="mecanico">
        <img src="{{ asset('images/mecanico.png') }}" class="mecanico">
    </div>

    <div class="papel">
        <img src="{{ asset('images/papel.jpg') }}" class="papel">
    </div>

</div>

<div class="espacio4">
    <br><br><br><br>
    <h1 class="subrayado"><strong>Piezas</strong></h1>
    <br><br>
    <p>Puedes comprar cualquier pieza que quieras en nuestra </p>
    <p>tienda online y incluso pedir cita y que monten las  </p>
    <p> piezas nuestros especialistas en nuestro taller</p>
    <div class="reguera">
        <img src="{{ asset('images/regera.png') }}" class="reguera">
    </div>

</div>


<div class="espacio5">
    <div class="nissan">
        <img src="{{ asset('images/nissanskyline.jpg') }}" class="nissan">
    </div>

    <br><br><br>
    <h1 class="subrayado"><strong>Proyectos</strong></h1>
    <br>
    <br>
    <br>

    <div class='cliente1'>
        <div class="comment1">
            <h2>Carlos Pedri Gaitán</h2>
            <p class="comment-text">Modifico su seat ibiza para darle su sello personal</p>
            <p class="comment-text">con unas lunes tintadas y unas llantas. Todo homologado</p>
        </div>
        <div class='seisL'>
        <img src="{{ asset('images/seatleongris.jpg') }}" class="seisL">
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class='cliente2'>
        <div class="comment2">
            <h2>Manuel Ruz Pacheco</h2>
            <p class="comment2-text">Cambió su golf 5 1900 tdi estéticamente y mecánicamente</p>
            <p class="comment2-text">haciendo su coche mucho más potente y bonito</p>
        </div>
        <div class='golf5'>
        <img src="{{ asset('images/golf555.jpg') }}" class="golf5">
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class='cliente3'>
        <div class="comment3">
            <h2>Alejandro Ruiz Ortiz</h2>
            <p class="comment3-text">Puso unos vinilos en su golf 7 y le hizo coding y</p>
            <p class="comment3-text">cambio de llantas. Tiene stage 3 dando una potencia de 400 hp</p>
        </div>
        <div class='golf7'>
        <img src="{{ asset('images/GOLF777.jpg') }}" class="golf7">
        </div>
    </div>

</div>



@endsection
