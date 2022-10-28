@extends('layouts.app')
@section('content')
<link href="{{ asset('/css/inicio.css') }}" rel="stylesheet" />

<body>
    <div class="container">
        <div class="titulo">
            <h1> Hola Cuidador </h1>
        </div>
        <div class="texto">
            <p>Acá tendras la opción de ver el progreso y hablar directamente con El Comité para consultar cualquier duda que tengas</p>
        </div>
        <div class="buttons">
            <a class="btn btn-primary bg-secondary" href="#">Ver Progreso</a> 
            <a class="btn btn-primary bg-secondary" href="#">Módulos</a> 
        </div>
    </div>
</body>
@endsection