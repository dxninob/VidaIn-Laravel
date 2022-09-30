@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')
<div class="text-center">
    Bienvenido a BienEstar
</div>
<br>
<div class="text-center parentElement">
    <a class="btn btn-primary bg-secondary btn-size button" href="{{ route('test.index') }}">Hacer examen</a> 
</div>
@endsection