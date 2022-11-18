@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/usuario.css">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>

<body class="color-bg">
    <section id="pantalla-dividida">
        <div id="izquierda" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 red">
            <img src="{{ asset('/images/logo.png') }}" rel="stylesheet" width="80%">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 red">
            <div class="introduccion">
                <p> ¿Qué rol cumplirás en la plataforma? </p>
            </div>
            <div class="boton1">
                <br>
                <a id="boton1" href="{{ route('planes') }}">Usuario</a>
            </div>
            <div class="boton2">
                <br>
                <br>
                <a id="boton2" href="{{ route('register.doctor') }}">BienEstar</a>
            </div>
            <div class="boton3">
                <br>
                <br>
                <a id="boton3" href="{{ route('register.cuidador') }}">Acompañante</a>
            </div>
        </div>
    </section>
</body>
@endsection