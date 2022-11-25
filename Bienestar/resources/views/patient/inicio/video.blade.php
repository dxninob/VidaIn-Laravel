@extends('layouts.app')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/video.css') }}">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>

<body class="color-bg">
    <br>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    </div>

    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <div class="video-responsive">
            <iframe src=https://www.youtube.com/embed/0CG1vCz6MDs title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
    </div>
    <br>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    </div>
    <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4 margin-btn">
    </div>
    <div class="col-xs-8 col-sm-8 col-md-4 col-lg-4 margin-btn">
        <div class="boton1">
            <br>
            <a id="boton1" href="{{ route('home.test') }}">Continuar</a>
        </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-4 col-lg-4 margin-btn">
    </div>
</body>
@endsection