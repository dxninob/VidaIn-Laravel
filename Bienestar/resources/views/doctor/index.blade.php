@extends('layouts.doctor')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/css/pacientes.css') }}">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>
<div class="row">
    <br>
    <br>
    <div id="container" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 search">

    <div id="border margen" class="border margen">
        <form action="{{ route('doctor.pacientes') }}">

            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por documento" aria-label="Search">
            <select name="order" id="order">
                <option value="" selected disabled hidden></option>
                <option value="1">A-Z</option>
                <option value="0">Z-A</option>
            </select>
            <input type="submit" class="btn text-white color-btn-fil" value="Filtrar">
        </form>
    </div></div>
</div>
<div class="row">
    @foreach ($viewData["users"] as $user)
    <div id="container" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 red">
        <a href="{{ route('doctor.show', ['id'=> $user->id]) }}">
            <button class="box">
                <div id="content">
                    <p id="boton">{{ $user->name }} {{ $user->lastname }}</p>
                    <p id="boton">{{ $user->document }}</p>
                    <div class="icon"><i class="ic fas fa-thin fa-star"></i></i></div>
                </div>
            </button>
        </a>
    </div>
@endforeach
</div>
@endsection