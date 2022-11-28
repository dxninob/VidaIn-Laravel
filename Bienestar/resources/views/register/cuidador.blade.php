@extends('layouts.app')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('/css/registroPatient.css') }}">
<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>

<body>
    <form method="POST" action="{{ route('register.all') }}">
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

                <div class="row">
                    <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" placeholder="Fecha de nacimiento" required autocomplete="birthday" autofocus>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 red">
                <div class="row">
                    <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Número de teléfono" required autocomplete="phone" autofocus>
                </div>

                <div class="row">
                    <input id="namePatient" type="text" class="form-control @error('namePatient') is-invalid @enderror" name="namePatient" value="{{ old('namePatient') }}" placeholder="Nombre del paciente a su cargo" required autocomplete="namePatient" autofocus>
                </div>

                <div class="row">
                    <input id="documentPatient" type="number" class="form-control @error('documentPatient') is-invalid @enderror" name="documentPatient" value="{{ old('documentPatient') }}" placeholder="Documento del paciente a su cargo" required autocomplete="documentPatient" autofocus>
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

                <input id="cuidador" type="hidden" name="role" value="cuidador">
            </div>

            <div class="container2">
                    <button type="submit" id="boton1">
                        {{ __('Registrarse') }}
                    </button>
            </div>
            <div>
                <p>Al registrarte en BIENESTAR, aceptas nuestros <b>términos y políticas de privacidad.</b></p>
            </div>
        </div>
    </form>
</body>
@endsection