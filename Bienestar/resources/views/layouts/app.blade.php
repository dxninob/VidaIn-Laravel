<head>
    <title>BienEstar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>

<body>
    <nav class="navbar navbar-light nav-color">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
            </span>
        </button>

        <div class="bienestar"><b class="txt-lg">BIENESTAR</b><br>ESTAR BIEN</div>

        <a class="" href="{{ route('emergencia') }}">
            <button class="sos" type="button">
                <b>SOS</b>
            </button>
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item"> <a class="nav-link" href="{{ route('login.usuario') }}">Iniciar sesión</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('user') }}">Registro</a> </li>
                @else
                <li class="nav-item"> <a class="nav-link" href="{{ route('home.test') }}">Realizar prueba</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('test.resultados') }}">Resultados</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('actividades.index') }}">Actividades</a> </li>
                <!-- <li class="nav-item"> <a class="nav-link" href="#">Progreso</a> </li> -->
                <!-- <li class="nav-item"> <a class="nav-link" href="{{ route('actividades.calendario') }}">Calendario</a> </li> -->
                <form id="logout" action="{{ route('logout') }}" method="POST">
                    <li class="nav-item"> <a class="nav-link" onclick="document.getElementById('logout').submit();">Cerrar</a> </li>
                    @csrf
                </form>
                @endguest
            </ul>
        </div>
    </nav>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>