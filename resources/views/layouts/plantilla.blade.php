<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
    <!-- si no carga css de footer y header, desbloquear esto: <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

</head>
<body>
    @include('layouts.partials.header') 
    @yield('content')
    @include('layouts.partials.footer')
</body>
</html>
