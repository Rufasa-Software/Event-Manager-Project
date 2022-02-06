@extends('access.register')

@section('content')
<div class="d-flex justify-content-center" id="card-container">
    <div class="card-content">
        <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div id="name" class="d-flex wrap">
                            <label for="name" class="col-form-label name-label">Nombre</label>
                            <input type="text" class="name-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div id="email-div" class="d-flex wrap">
                            <label for="email" class="col-form-label email-label">E-Mail</label>
                            <input type="email" class="email-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div id="password-div" class="d-flex wrap">
                            <label for="password" class="col-form-label password-label">Contraseña</label>
                            <input type="password" class="password-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div id="confirm" class="d-flex wrap">
                            <label for="password confirm" class="col-form-label confirm-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control confirm-input" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div id="register" class="d-flex wrap">
                            <div class="offset-md-4">
                                <button type="submit" class="btn-lg btn-primary">Registro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
