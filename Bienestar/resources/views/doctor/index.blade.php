@extends('layouts.cuidador')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
</head>
<div class="row">
    <br>
    <br>
    <div id="border margen" class="border margen">
        <form action="{{ route('doctor.pacientes') }}">

            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por documento" aria-label="Search">
            <select name="order" id="order">
                <option value="" selected disabled hidden></option>
                <option value="1">A-Z</option>
                <option value="0">Z-A</option>
            </select>
            <input type="submit" class="btn bg-primary text-white" value="Filtrar">
        </form>
    </div>

    @foreach ($viewData["users"] as $user)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">

            <div class="card-body text-center">
                <h5>{{ $user->name }} {{ $user->lastname }}</h5>
                <p>Documento: {{ $user->document }}</p>
                <a href="{{ route('doctor.show', ['id'=> $user->id]) }}" class="btn bg-primary text-white">Ver</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection