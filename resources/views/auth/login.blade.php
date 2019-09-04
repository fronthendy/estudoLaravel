@extends('layouts.master')

@section('title', 'login')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="text-center mt-4"><h2>{{ __('Login') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">


                        @csrf

                        <div class="form-group row">
                            <div class="label-float">
                                <div class="label-float">
                                    <input id="email" placeholder=" " type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                                    <label for="email" class="col-form-label">{{ __('Email') }}</label>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="label-float">
                                <div class="label-float">
                                    <input id="email" placeholder=" " type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label for="email" class="col-form-label">{{ __('Senha') }}</label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar me') }}
                                    </label>
                                </div>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu sua senha?') }}
                                        </a>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-center">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection