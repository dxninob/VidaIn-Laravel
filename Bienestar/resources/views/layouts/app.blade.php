<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-3">
        <div class="container">
            <a class="navbar-brand" href="#">BienEstar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    @guest
                    <a class="nav-link active" href="{{ route('login') }}">Iniciar sesión</a>
                    <a class="nav-link active" href="{{ route('register') }}">Registrarse</a>
                    @else
                    <a class="nav-link active" href="{{ route('home.index') }}">Inicio</a>
                    <a class="nav-link active" href="{{ route('activities.show') }}">Actividades</a>
                    <a class="nav-link active" href="{{ route('test.graphics') }}">Resultados</a>
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Cerrar sesión</a>
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-3">
        <div class="container d-flex align-items-center flex-column">
        </div>
    </header>

    <!-- header -->

    <div class="container my-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>