@extends('layouts.app')
@section('content')
<div class="text-center">
    Bienvenido a BienEstar
</div>
<br>
<div class="text-center parentElement">
    <a class="btn btn-primary bg-secondary btn-size button" href="{{ route('test.index1') }}">Hacer examen</a>
</div>
@endsection