@extends('layouts.auth.loginheader')

@section('auth')
    <div class="auth-wrapper col-6 vh-100 h-100 mh-100 d-flex justify-content-center align-items-center">
        <div class="box-auth w-50 h-50 position-absolute rounded-left p-3" style="right: 0">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="h5 font-weight-bold form-header d-flex align-items-center ">
                    <a href="" class=" btn btn-sm">
                        <img class="back" src="{{  asset('asset/icons/icons8-left-24.png') }}"/>
                    </a>
                    <p class="d-flex align-items-center mb-0 pb-0">
                        LOGIN
                    </p>
                </div>
                <div class="row col-form-label ">
                    <label for="email">
                        {{ 'Email' }}
                    </label>
                    <div class="col-12">
                        <input type="email" name="email" id="email" class="form-control @error('email')
                            is-invalid
                        @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row ">
                    <label for="password">
                        {{ 'Password' }}
                    </label>
                    <div class="col-12">
                        <input type="password" name="password" id="password" class="form-control @error('password')
                            is-invalid
                        @enderror" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $password }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="d-flex justify-content-around align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="form-check text-end">
                            @if (Route::has('password.request'))
                            <a class="btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="button-login col-md-12 offset-md-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-submit rounded">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-6 vh-100 h-100 mh-100 d-flex justify-content-center align-items-center">
        <div class="box-authreg w-50 h-50 position-absolute rounded-right p-3 d-flex flex-column justify-content-around" style="left: 0">
            <p class="h4 p-reg">
                Welcome to <b><strong>AUGURI E-Commerce</strong></b>
            </p>
            <div class="container-fluid d-flex justify-content-center p-0 m-0">
                <div class="p-3 rounded" name="text-area" id="textarealogin">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio eum voluptatibus deleniti a aspernatur consectetur vel dolores. Quibusdam a aperiam sed! Commodi consectetur debitis a nesciunt, officia tenetur fugiat similique. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio eum voluptatibus deleniti a aspernatur consectetur vel dolores. Quibusdam a aperiam sed! Commodi consectetur debitis a nesciunt, officia tenetur fugiat similique. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio eum voluptatibus deleniti a aspernatur consectetur vel dolores. Quibusdam a aperiam sed! Commodi consectetur debitis a nesciunt, officia tenetur fugiat similique.
                </div>
            </div>
            <p class="p-reg d-flex justify-content-between mb-0 d-flex align-items-center">
                Haven't yet? <a class="text-end" href="{{ route('register') }}"><strong>Register</strong><img src="{{ asset('asset/icons/icons8-forward-24.png') }}" alt="" srcset=""></a>
            </p>
        </div>
    </div>

@endsection
