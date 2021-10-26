{{-- @extends('layouts.app')

@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    {{-- <link rel="stylesheet" href="{{asset('css/test.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    {{-- <img src=" {{ asset('img/LOGO.png') }}"> --}}
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        {{-- <li><a href="">About</a></li> --}}
                        <li><a href="">Contact</a></li>
                        <li><img src="menu.png" class="menu-icon" onclick="menutoggle()"></li> --}}
                    </ul>
                </nav>
                {{-- <a href=""{{ route('home') }}"><img src="{{asset('img/cart.png')}}" width="30px" height="30px"></a> --}}
                {{-- <img src="menu.png" class="menu-icon" onclick="menutoggle()"> --}}
            </div>

        </div>
    </div>

{{-- _____________________________________________________________________ --}}
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="title">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('is_login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="btn row mb-0"> --}}
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <div>
                                            <a href="{{ route('register') }}"  class="btn btn-primary" style="margin-top: 1%">
                                                {{ __('Register Now ') }}
                                            </a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>{{-- @endsection --}}
