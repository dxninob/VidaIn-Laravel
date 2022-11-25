@extends('layouts.app')
@section('content')

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/progress.css') }}" rel="stylesheet" />
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>

</head>

<body>
    <div class="container">
        <h1 class="titulo">Progreso</h1>

        <h3 class="titulo">Autoaceptacion</h3>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar yellow" role="progressbar" style="width: {{ $viewData[0] }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <h1 class="titulo white">{{ $viewData[0] }}%</h1>
            </div>
        </div>
        <br>
        <h3 class="titulo">Dominio del entorno</h3>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar orange" role="progressbar" style="width: {{ $viewData[1] }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <h1 class="titulo white">{{ $viewData[1] }}%</h1>
            </div>
        </div>
        <br>
        <h3 class="titulo">Relaciones positivas con los demás</h3>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar pink" role="progressbar" style="width: {{ $viewData[2] }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <h1 class="titulo white">{{ $viewData[2] }}%</h1>
            </div>
        </div>
        <br>
        <h3 class="titulo">Autonomía</h3>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar purple" role="progressbar" style="width: {{ $viewData[3] }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <h1 class="titulo white">{{ $viewData[3] }}%</h1>
            </div>
        </div>
        <br>
        <h3 class="titulo">Propósito de vida y crecimiento personal</h3>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar blue" role="progressbar" style="width: {{ $viewData[4] }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <h1 class="titulo white">{{ $viewData[4] }}%</h1>
            </div>
        </div>

        <div class="boton1">
            <br>
            <br>
            <br>
            <a id="boton1" href="{{ route('actividades.index') }}">Realizar actividades</a>
        </div>

        <br>
        <br>
    </div>
</body>
@endsection