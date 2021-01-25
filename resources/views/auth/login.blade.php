@extends('layouts.navbar')

@section('title')
 Login
@endsection

@section('content')

    <div class="container mb-5">
        <div class="row justify-content-center" style="margin-top: 16vh">
            <div class="col-md-6 align-self-center">
                <img src="{{ url("images/partikel1.svg") }}" alt="" class="d-none d-md-none d-lg-block partikel1" >
                <img src="{{ url("images/partikel2.svg") }}" alt="" class="d-none d-md-none d-lg-block partikel2" >
                <img src="{{ url("images/partikel3.svg") }}" alt="" class="d-none d-md-none d-lg-block partikel3" >
                <img src="{{ url("images/logo_hubin.svg") }}" alt="" class="d-none d-md-none d-lg-block" >
                <p style="color: #26DCA2">Hubungan Industri Smkn 1 Cibinong</p>
            </div>

            <div class="col-md-4"> 
                <h3 class="register__login"><span class="text__register">Login</span></h3>
                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    
                    <div class="form-groub">
                        <label for="email"> {{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-groub">
                        <label for="password"> {{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{ old('password') }}"> 
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                   
                    <div class="form-groub mt-5">
                        <button type="submit" class="btn btn-none py-2"  style="background: #17c08b; color:white; width:100%;" >
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
                <a href="{{ route("register") }}"><p style="color:#FAAA70; font-size:15px;" class="mt-4">Saya Tidak Mempunyai Akun Arahkan Saya !</p></a>
            </div>
        </div>
    </div>

@endsection
