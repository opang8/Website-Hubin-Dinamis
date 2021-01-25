@extends('layouts.navbar_sukses')

@section('title', 'Terkirim')

@section('content')
    <main>
        <div class="section-success d-flex align-item-center">
            <div class="col text-center">
                <img src="{{ asset('/images/icon_sukses.png') }}" alt="sukses img" height="300" style="margin-top: 15vh">
                <h1>Berhasil Dikirim</h1>
                <div class="row">
                    <div class="text-center col-lg-12">
                    <p class="mb-0" style="max-width: 100%;">
                    Terimakasih, pendapatmu telah terkirim
                    </p>
                    <p class="mb-0" style="max-width: 100%;">
                    klik button dibawah untuk kembali
                    </p>
                    </div>
                    </div>
                <a href="{{ url('/page_siswa') }}" class="btn btn-home-page mt-3 px-5">
                    Beranda
                </a>
            </div>
        </div>
    </main>
    <div style="margin-top:100px;">
        @include('includes.footer')
    </div>
    

@endsection
