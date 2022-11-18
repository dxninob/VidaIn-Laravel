@extends('layouts.app')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/actividades.css') }}">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    <title>BienEstar</title>
</head>

<body>
    <div id="rox">
        <div id="container">
            <div class="introduccion">
                <p>Selecciona la actividad que quieres realizar hoy</p>
            </div>

            <div id="container" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 red">
                <div class="box">
                    <div id="content">
                        <a id="boton" href="#">COMENZAR</a>
                        <div class="icon"><i class="ic fas fa-thin fa-star"></i></i></div>
                    </div>
                </div>
            </div>

            <div id="container" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 red">
                <div class="box">
                    <div id="content">
                        <a id="boton" href="#">COMENZAR</a>
                        <div class="icon"><i class="ic fas fa-thin fa-star"></i></i></div>
                    </div>
                </div>
            </div>

            <div id="container" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 red">
                <div class="box">
                    <div id="content">
                        <a id="boton" href="#">COMENZAR</a>
                        <div class="icon"><i class="ic fas fa-thin fa-star"></i></i></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
@endsection