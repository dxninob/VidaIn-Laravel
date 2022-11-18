@extends('layouts.app')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/cuidador.css') }}">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>

<body>
    <div class="introduccion">
        <p>Hola Acompañanante</p>
    </div>
    <div class="introduccion2">
        <p>Acá tendras la opción de ver el progreso de Marta y hablar directamente con el comite para consultar cualquier duda que tengas.</p>
    </div>
    <div class="alinear">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="espacio">

                <div class="boton">
                    <a id="boton" href="#">Progreso de<br>actividades</a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="espacio">

                <div class="boton">
                    <a id="boton" href="#">Resultados<br>del test</a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="espacio">

                <div class="boton">
                    <a id="boton" href="#">Información de<br>módulos</a>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection