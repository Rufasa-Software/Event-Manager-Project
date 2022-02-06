@extends('access.login')

@section('content')
        <div class="d-flex justify-content-center" id="card-container">
            <div class="card-content">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div id="email-div" class="d-flex wrap email-login-div">
                            <label for="email" class="col-form-label email-label">E-Mail</label>
                            <input type="email" class="email-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div id="password-div" class="d-flex wrap password-login-div">
                            <label for="password input" class="col-form-label password-label">Contraseña</label>
                            <input type="password" class="password-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div id="remember-div" class="d-flex wrap">
                            <input class="form-check-input remember-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label remember-label" for="remember">Recuérdame</label>
                        </div>

                        <div id="link-password" class="d-flex wrap">
                            <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                        </div>
                        
                        <div id="join" class="d-flex wrap justify-content-center">
                            <button type="submit" class="btn-lg join-input">Únete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection