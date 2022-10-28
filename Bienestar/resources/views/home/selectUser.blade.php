@extends('layouts.app')
@section('content')


<link href="{{ asset('/css/users.css') }}" rel="stylesheet" />


<div class="container1">
    <div class="button1">
        <a class="btn btn-secondary btn-lg btn-size button" href="{{ route('register') }}">Soy Usuario</a> 
        <img class="user1" src="https://cdn-icons-png.flaticon.com/512/2521/2521826.png" style="max-width:100%;width:auto;height:auto;">
</div>

<div class="container2">
    <div class="button2">
        <a class="btn btn-secondary btn-size button" href="{{ route('register') }}">Soy Comité</a> 
        <img class="user2" src="https://images.vexels.com/media/users/3/164618/isolated/preview/8c4830cc7ef89614f2d5a0aa46904c2d-trazo-de-cuenta-de-usuario-de-icono-de-tableta.png" style="max-width:100%;width:auto;height:auto;">
    </div>
</div>

<div class="container3">
    <div class="button3">
        <a class="btn btn-secondary btn-size button" href="{{ route('register') }}">Soy Cuidador@ </a> 
        <img class="user3" src="https://cdn-icons-png.flaticon.com/512/5779/5779651.png" style="max-width:100%;width:auto;height:auto;">
    </div>

@endsection