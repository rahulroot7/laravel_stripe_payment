@extends('layouts.master')

@section('content')
<section class="login-form py-5">
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-10 col-12">
            <div class="shadow p-4">
            <div class="card border-0">
                <div class="main-title text-center card-header border-0">
                     <h2 class="main-title-text fw-bold"> {{ __('Login') }} </h2>
                 </div>
                  @if (session('unsuccess'))
            <h6 class="alert alert-success">{{ session('unsuccess') }}</h6>
            @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('login.submit') }}" class="mb-0">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-3 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 align-items-center">
                            <div class="col-md-4 offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn main-btn">
                                    {{ __('Login') }}
                                </button>

                                <!--@if (Route::has('password.request'))-->
                                <!--    <a class="btn btn-link" href="{{ route('password.request') }}">-->
                                <!--        {{ __('Forgot Your Password?') }}-->
                                <!--    </a>-->
                                <!--@endif-->
                                
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
