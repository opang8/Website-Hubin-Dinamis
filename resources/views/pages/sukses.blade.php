@extends('layouts.navbar_sukses')

@section('title', 'Check Success')

@section('content')


    <main>
        <div class="section-success d-flex align-item-center">
            <div class="col text-center">
                <img src="{{ asset('/images/icon_sukses.png') }}" alt="sukses img" height="300" style="margin-top:100px;">
                <h1>Yay ! Sukses</h1>
                <div class="row">
                    <div class="text-center col-lg-12">
                    <p class="mb-0" style="max-width: 100%;">
                    Resume anda telah berhasil dikirim,
                    </p>
                    <p class="mb-0" style="max-width: 100%;">
                    kami telah mengirimi anda email 
                    </p>
                    <p>
                        untuk download data pdf anda
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
