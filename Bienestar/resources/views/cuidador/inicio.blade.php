@extends('layouts.app')
@section('title', 'Home Page - BienEstar')
@section('content')

<link href="{{ asset('/css/inicio.css') }}" rel="stylesheet" />

<body>
    <div class="container">
        <div class="titulo">
            <h1> Hola Cuidador </h1>
        </div>
        <div class="texto">
            <p>Acá tendras la opción de ver el progreso de Marta y hablar directamente con el  comite para consultar cualquier duda que tengas</p>
        </div>
        <div class="buttons">
            <a class="btn btn-primary bg-secondary" href="{{ route('test.index') }}">Ver Progreso</a> 
            <a class="btn btn-primary bg-secondary" href="{{ route('test.index') }}">Módulos</a> 
            <a class="btn btn-primary bg-secondary" href="{{ route('test.index') }}">El Comité</a> 
        </div>
    </div>
</body>
@endsection