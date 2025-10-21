@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4 login-card text-center">
        
        <!-- Logo UNAB -->
        <img src="{{ asset('images/unab_login.png') }}" alt="Logo UNAB" class="unab-login-logo mb-4">

        <h2 class="mb-4">Inicio de Sesión</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="email">Correo electrónico</label>
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password">Contraseña</label>
                <input id="password" type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       name="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">
                Iniciar sesión
            </button>
        </form>
    </div>
</div>
@endsection
