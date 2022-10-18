<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/registro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/categorias.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="antialiased">
    <div class="vh-100">
        <div class="container-fluid">
            <header class="header">
                <nav class="navbar fixed-top navbar-expand-lg bg-dark">
                    <div class="container-fluid">
                        <a href="" class="navbar-brand logo">✠Urban Archive</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @if (Auth::user()->hasRole('artist'))
                                <li class="nav-menu-item">
                                    <a class="nav-link nav-menu-link_active active text-white" aria-current="page"
                                        href="{{ route('publicacion.create') }}">Crear Publicacion</a>
                                </li>
                            @endif
                            <li class="nav-menu-item">
                                <a class="nav-link nav-menu-link" aria-current="page"
                                    href="{{ url('/dashboard') }}">Inicio</a>
                            </li>
                            <li class="nav-menu-item">
                                <a class="nav-link nav-menu-link" aria-current="page" href="{{ route('categorias.index') }}">Categorias</a>
                            </li>
                            <div class="dropdown dropstart mt-2">
                                <button class="btn btn-warning dropdown-toggle text-white" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" aria-current="page" href="{{ route('logout') }}">
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="bg-navy">Cerrar Sesión</button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>

        <div class="content-wrapper">
            <div class="container-fluid mt-5 mb-5">
                @yield('content')
            </div>
        </div>
        <footer class="footer pt-3">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-md-6 footer-left">
                        <p class="footer-links">
                            <a class="link-1" href="#">Urban Archive</a>
                            <a href="#">Contactanos</a>
                            <a href="#">Acerca de</a>
                        </p>
                        <p>Urban Archive &copy; 2022</p>
                    </div>
                    <div class="col-md-6 footer-right">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    @stack('modals')

    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>

    @livewireScripts
</body>

</html>
