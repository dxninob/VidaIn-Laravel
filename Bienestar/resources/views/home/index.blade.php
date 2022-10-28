@extends('layouts.app')
@section('title', 'Home Page - BienEstar')
@section('content')
<div class="text-center">
    Bienvenido a BienEstar
</div>
<br>
<link href="{{ asset('/css/index.css') }}" rel="stylesheet" />

<body>
    <div class="button">
        <a class="btn btn-primary bg-secondary btn-size button" href="{{ route('test.index') }}">Comenzar prueba</a> 
    </div>
</body>
@endsection