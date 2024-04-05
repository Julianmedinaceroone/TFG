@extends('layouts.plantilla')

@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> <!-- footer y header css -->
<link rel="stylesheet" href="{{ asset('css/frontmoodboard.css') }}">

<img src="{{ asset('images/moodboard.png') }}" class="moodboard">

@endsection
