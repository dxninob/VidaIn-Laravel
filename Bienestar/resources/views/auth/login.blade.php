<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('/css/login.css') }}">
<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h1>Ingresar</h1>
</div>
<form method="POST" action="{{ route('login') }}">
@csrf
    <div class="row">
        <div class="col-md-8">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="form-check">
                        <input class="form-check-input check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Recordarme') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <button type="submit" class="btn btn-primary bg-secondary">
                        <b>{{ __('INGRESAR') }}</b>
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3>Al registrarte en BIENESTAR, aceptas nuestros términos <br> y políticas de privacidad.</h3>
</div>