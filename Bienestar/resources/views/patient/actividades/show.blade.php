@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/actividad.css') }}">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</head>

<body>
    <div class="introduccion">
        <p>¿Cómo hacerlo?</p>
    </div>

    <div id="container" class="col-xs-12 col-sm-12 col-md-5 col-lg-5 red">
        <div class="box">
            <div id="content">
                <p>Actividad</p>
                <div class="icon"><i class="ic fas fa-thin fa-star"></i></i></div>
            </div>
        </div>
    </div>

    <div id="container" class="col-xs-12 col-sm-12 col-md-7 col-lg-7 red">
        <div class="description">
            <div id="tittle">
                <p>Indicaciones</p>
            </div>
        </div>

        <div class="description">
            <div id="descriptions">
                <p>{{  $viewData['activity']->description }}. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>

    <div id="container" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 red">
        <div class="boton1">
            <a id="boton1" href="{{ route('actividades.index') }}">ACEPTAR</a>
            <a id="boton1" href="{{ route('actividades.index') }}">DENEGAR</a>
        </div>
    </div>
</body>
@endsection