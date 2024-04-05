<header>
    <div class="logo">
        <img src="{{ asset('images/logotipo2.png') }}" alt="logo de autotechnik" class="loaded">
    </div>  
    <nav>
        <a href="{{ route('frontinicio') }}" class="nav-link">Inicio</a>
        <a href="{{ route('fronttaller') }}" class="nav-link">Taller</a>
        <a href="{{ route('fronttunning') }}" class="nav-link">Tunning</a>
        <a href="{{ route('fronttienda') }}" class="nav-link">Tienda</a>
        <a href="{{ route('frontforo') }}" class="nav-link">Foro</a>
        <a href="{{ route('frontdetailing') }}" class="nav-link">Detailing</a>
    </nav>

    @auth
    <div class="usuario">
        <span>{{ Auth::user()->name }}</span> /
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout">Cerrar Sesión</button>
        </form>
    </div>
    
    @else
        <a href="{{ route('login') }}" class="login">Iniciar Sesión </a>/
        <a href="{{ route('register') }}" class="register">Registrarse</a>
    @endauth
</header>

<style>
    .logo img {
        width: 100px; /* Ancho fijo */
        height: auto; /* Altura ajustada automáticamente */
    }

    /* Mantenemos la imagen oculta hasta que se carga completamente */
    .logo img:not(.loaded) {
        display: none;
    }
</style>
