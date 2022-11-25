@extends('layouts.app')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/emergencia.css') }}">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</head>

<body>
    <div class="introduccion">
        <p>Estamos aquí para brindarte una orientación ética y responsable sobre las situaciones que hacen parte de tu cotidianidad</p>
    </div>
    <div class="centrar">
        <div id="container" class="container col-xs-12 col-sm-12 col-md-4 col-lg-4 red">
            <div class="box">
                <div class="icon2">
                    <p> 123 </p>
                </div>
                <div class="content">
                    <br>
                    <p>En caso de una emergencia en salud o salud mental.</p>
                </div>
            </div>
        </div>

        <div id="container" class="container col-xs-12 col-sm-12 col-md-4 col-lg-4 red">
            <div class="box">
                <div class="icon2">
                    <p> 106 </p>
                </div>
                <div class="content">
                    <br>
                    <p>Psicólogos que brindan un espacio de escucha y orientación emocional.</p>
                </div>
            </div>
        </div>

        <div id="container" class="container col-xs-12 col-sm-12 col-md-4 col-lg-4 red">
            <div class="box">
                <div class="icon2">
                    <p> BienEstar </p>
                </div>
                <div class="content">
                    <br>
                    <p>Chat directo a un especialista de BienEstar.</p>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection