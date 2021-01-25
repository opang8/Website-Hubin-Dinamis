@extends('layouts.navbar')
@section('title')
Register
@endsection
@section('content')
{{-- <div class="container" style="margin-top: 20vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="roles" class="col-md-4 col-form-label text-md-right">{{ __('Masuk Sebagai') }}</label>

                            <div class="col-md-6">
                                
                                <div class="custom-control custom-radio custom-control-inline mt-2">
                                    <input type="radio" id="siswa" name="roles" class="custom-control-input" value="USER" required <?=(old('roles') == 'siswa' ? 'checked' : null)?>>
                                    <label class="custom-control-label" for="siswa">Siswa</label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="perusahaan" name="roles" class="custom-control-input" value="PERUSAHAAN" required <?=(old('roles') == 'perusahaan' ? 'checked' : null)?>>
                                    <label class="custom-control-label" for="perusahaan">Perusahaan</label>
                                  </div>

                                @error('roles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{ old('password') }}"> 

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{ old('password') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="container mb-5">
        <div class="row justify-content-center" style="margin-top: 5vh">
            <div class="col-md-6 align-self-center">
                <img src="{{ url("images/partikel1.svg") }}" alt="" class="d-none d-md-none d-lg-block partikel1" >
                <img src="{{ url("images/partikel2.svg") }}" alt="" class="d-none d-md-none d-lg-block partikel2" >
                <img src="{{ url("images/partikel3.svg") }}" alt="" class="d-none d-md-none d-lg-block partikel3" >
                <img src="{{ url("images/logo_hubin.svg") }}" alt="" class="d-none d-md-none d-lg-block" >
                <p style="color: #26DCA2">Hubungan Industri Smkn 1 Cibinong</p>
            </div>

            <div class="col-md-4"> 
                <h3 class="register__login"><span class="text__register">Register</span></h3>
                <form method="POST" action="{{ route('register') }}">

                    @csrf

                    <div class="form-groub">
                        <label> {{ __('Nama') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required value="{{ old('name') }}"  autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <label> {{ __('Daftar Sebagai') }}</label>
                    <div class="form-check">
                        {{-- <input type="radio" id="siswa" name="roles" class="form-check-input form-radio" value="USER" required <?=(old('roles') == 'siswa' ? 'checked' : null)?>>
                        <label class="form-check-label radio" for="siswa">
                            {{ __('Siswa') }}
                        </label>
                      </div>
                      <div class="form-check">
                        <input type="radio" id="perusahaan" name="roles" class="form-check-input form-radio" value="PERUSAHAAN" required <?=(old('roles') == 'perusahaan' ? 'checked' : null)?>>
                        <label class="form-check-label radio" for="perusahaan">
                            {{ __('Perusahaan') }}
                        </label> --}}
                        <label class="container"><span class="text__radio">Siswa</span>
                            <input type="radio" id="siswa" name="roles" class="form-check-input form-radio" value="SISWA" required <?=(old('roles') == 'siswa' ? 'checked' : null)?>>
                            <span class="checkmark"></span>
                          </label>
                          <label class="container"><span class="text__radio">Perusahaan</span>
                            <input type="radio" id="perusahaan" name="roles" class="form-check-input form-radio" value="PERUSAHAAN" required <?=(old('roles') == 'perusahaan' ? 'checked' : null)?>>
                            <span class="checkmark"></span>
                          </label>
                        @error('roles')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror


                      </div>
                    <div class="form-groub">
                        <label for="email"> {{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                    <div class="form-groub">
                        <label for="password-confirm"> {{ __('Konfirmasi Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" value="{{ old('password') }}">
                    </div>
                    <div class="form-groub mt-5">
                        <button type="submit" class="btn btn-none py-2"  style="background: #17c08b; color:white; width:100%;" >
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
                <a href="{{ route("login") }}"><p style="color:#FAAA70; font-size:15px;" class="mt-4">Saya Sudah Mempunyai Akun !</p></a>
            </div>
        </div>
    </div>

@endsection
