@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')
<div class="text-center">
    Bienvenido a BienEstar
</div>
<br>
<div class="text-center">
    <a class="btn btn-primary bg-secondary" href="{{ route('test.index') }}">Hacer examen</a> 
</div>
@endsection