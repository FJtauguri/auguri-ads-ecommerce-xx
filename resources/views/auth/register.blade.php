@extends('layouts.auth.loginheader')

@section('auth')
    <div class="auth-wrapper col-6 vh-100 h-100 mh-100 d-flex justify-content-center align-items-center">
        <div class="box-auth w-50 h-50 position-absolute rounded-left p-3" style="right: 0">
            <form action="{{ route('register') }}" method="post" class="needs-validation">
                @csrf
                <div class="h5 font-weight-bold form-header d-flex align-items-center ">
                    <a href="" class=" btn btn-sm">
                        <img class="back" src="{{ asset('asset/icons/icons8-left-24.png') }}" />
                    </a>
                    <p class="d-flex align-items-center mb-0 pb-0">
                        {{ 'REGISTER' }}
                    </p>
                </div>

                {{-- MULTIPLE FORM --}}
                <div class="row text-center flex-row d-flex justify-content-evenly mt-3 mb-3 progres">
                    <a id="reg-1" class="col prog-bar active">1</a>
                    <a id="reg-2" class="col prog-bar">2</a>
                    <a id="reg-3" class="col prog-bar">3</a>
                    <a id="reg-4" class="col prog-bar">4</a>
                </div>

                {{-- this is first page --}}
                <div class="form-reg active" id="frs1">
                    <div class="row col-form-label ">
                        <label for="name">
                            {{ __('Name') }}
                        </label>
                        <div class="col-12">
                            <input type="text" name="name" id="name"
                                class="form-control @error('name')
                            is-invalid
                        @enderror"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- this is next page --}}
                <div class="form-reg hidden" id="frs2">
                    <div class="row col-form-label ">
                        <label for="email">
                            {{ __('Email') }}
                        </label>
                        <div class="col-12">
                            <input type="email" name="email" id="email"
                                class="form-control @error('email')
                            is-invalid
                        @enderror"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- this is next page --}}
                <div class="form-reg hidden" id="frs3">
                    <div class="row col-form-label ">
                        <label for="password">
                            {{ __('Password') }}
                        </label>
                        <div class="col-12">
                            <input type="password" name="password" id="password"
                                class="form-control @error('password')
                            is-invalid
                        @enderror"
                                required autocomplete="new-password" autofocus>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div id="typepwd" class="hidden">
                                Please Enter Password
                            </div>
                        </div>
                    </div>
                </div>

                {{-- this is last page --}}
                <div class="form-reg hidden" id="frs4">
                    <div class="row col-form-label ">
                        <label for="password-confirm">
                            {{ __('Confirm Password') }}
                        </label>
                        <div class="col-12">
                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control"
                                required autocomplete="new-password" autofocus onkeyup="validatePasswordConfirmation()">
                            <div id="retypepwd" class="hidden">
                                Password do not match.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="button-reg container-fluid p-0 mt-5">
                    <div class="button-reg-click d-flex justify-content-start hidden" id="prevBtn">
                        <button type="button" class="btn btn-sm btn-back rounded">
                            {{ __('Prev') }}
                        </button>
                    </div>
                    <div class="button-reg-click d-flex justify-content-end hidden" id="nextBtn">
                        <button type="button" class="btn btn-sm btn-submit rounded">
                            {{ __('Next') }}
                        </button>
                    </div>
                    <div class="button-reg-click d-flex justify-content-end hidden" id="submitBtn">
                        <button type="submit" class="btn btn-sm btn-submit rounded">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="col-6 vh-100 h-100 mh-100 d-flex justify-content-center align-items-center">
        <div class="box-authreg w-50 h-50 position-absolute rounded-right p-3 d-flex flex-column justify-content-around"
            style="left: 0">
            <p class="h4 p-reg">
                Welcome to <b><strong>AUGURI E-Commerce</strong></b>
            </p>
            <div class="container-fluid d-flex justify-content-center p-0 m-0">
                <div class="p-3 rounded" name="text-area" id="textarealogin">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Distinctio eum voluptatibus deleniti a aspernatur consectetur vel dolores. Quibusdam a
                    aperiam sed! Commodi consectetur debitis a nesciunt, officia tenetur fugiat similique. Lorem ipsum,
                    dolor sit amet consectetur adipisicing elit. Distinctio eum voluptatibus deleniti a aspernatur
                    consectetur vel dolores. Quibusdam a aperiam sed! Commodi consectetur debitis a nesciunt, officia
                    tenetur fugiat similique. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio eum
                    voluptatibus deleniti a aspernatur consectetur vel dolores. Quibusdam a aperiam sed! Commodi consectetur
                    debitis a nesciunt, officia tenetur fugiat similique.
                </div>
            </div>
            <p class="p-reg d-flex justify-content-between mb-0 d-flex align-items-center">
                Haven't yet? <a class="text-end" href="{{ route('login') }}"><strong>{{ __('Login') }}</strong><img
                        src="{{ asset('asset/icons/icons8-forward-24.png') }}" alt="" srcset=""></a>
            </p>
        </div>
    </div>
@endsection
