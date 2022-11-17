@extends('layouts.app')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('/css/registro.css') }}">
<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="container">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 red">
                <h1>Crea tu perfil</h1>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 red">
                <div class="row">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror padding round" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre(s)" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row">
                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="Apellidos" required autocomplete="lastname" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <input id="document" type="number" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document') }}" placeholder="Número de Identificación" required autocomplete="document" autofocus>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 red">
                <div class="row">
                    <input id="profession" type="text" class="form-control @error('profession') is-invalid @enderror" name="profession" value="{{ old('profession') }}" placeholder="Profesión" required autocomplete="profession" autofocus>
                </div>

                <div class="row">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña" required autocomplete="new-password">
                </div>

                <input id="doctor" type="hidden" name="role" value="doctor">
            </div>

            <div class="container2">
                <div class="boton1">
                    <a id="boton1" href="">{{ __('Registrarse') }}</a>
                </div>
                <br>
                <p>Al registrarte en BIENESTAR, aceptas nuestros <b>términos y políticas de privacidad.</b></p>
            </div>
        </div>
    </form>
</body>
@endsection