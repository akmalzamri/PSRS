@extends('layouts.LRMaster')

@section('content')
<div class="login100-form-title" style="background-image: url(images/header_1.jpg);">
    <span class="login100-form-title-1">
        {{ __('Login') }}
    </span>
</div>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status')}}
</div>
@endif
<div class="card-body">
    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="wrap-input100 validate-input m-b-26">
            <label for="email" class="label-input100">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="wrap-input100 validate-input m-b-18">
            <label for="password" class="label-input100">{{ __('Password') }}</label>

                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
                <div class="form-check">
                    <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="label-checkbox100" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                    @if (Route::has('password.request'))
                    <a class="txt1" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>

            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    {{ __('Login') }}
                </button>


            </div>
        </div>
    </form>
</div>
</div>

@endsection