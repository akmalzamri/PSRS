@extends('layouts.LRMaster')

@section('content')

<div class="login100-form-title" style="background-image: url(images/header_1.jpg);">
    <span class="login100-form-title-1">
        {{ __('Register Therapist') }}
    </span>
</div>
<div class="card">
    <div class="card-body">
        <form class="login100-form validate-form" method="POST" action="/therapist-register-success">
            @csrf




            <div class="wrap-input100 validate-input m-b-26">
                <label for="name" class="label-input100">{{ __('Name') }}</label>

                    <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>



            <div class="wrap-input100 validate-input m-b-26">
                <label for="email" class="label-input100">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            <div class="wrap-input100 validate-input m-b-26">
                <label for="password" class="label-input100">{{ __('Password') }}</label>

                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>

            <div class="wrap-input100 validate-input m-b-26">
                <label for="password-confirm" class="label-input100">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group row mb-0">
                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                    {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection