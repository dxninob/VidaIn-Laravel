@extends('layouts.app')
@section('content')

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('/css/progress.css') }}" rel="stylesheet"/>
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>

</head>

<body>
    <div class="container">
        <h1 class="titulo">Progreso</h1>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <br>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar orange" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <br>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar pink" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <br>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar purple" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
        <br>
        <div class="progress" style="height: 10%;">
            <div class="progress-bar blue" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
    </div>
</body>
@endsection