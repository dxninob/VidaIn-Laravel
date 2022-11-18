@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>

<body class='color-bg'>
    <div class="introduccion">
        <p>Cuidamos tu salud mental, acompañado/a en todo momento de BienEstar</p>
    </div>
    <div class="introduccion2">
        <p>BienEstar es una corporación social comprometida con la trasformación de vida de las personas con discapacidad física y cognitiva, sus familias y su entorno social.</p>
    </div>
    <div class=botones>
        <div class="boton1">
            <br>
            <a id="boton1" href="{{ route('user') }}">EMPIEZA AHORA</a>
        </div>
        <div class="boton2">
            <br>
            <a id="boton2" href="{{ route('login') }}">YA TENGO CUENTA</a>
        </div>
    </div>
</body>
@endsection
