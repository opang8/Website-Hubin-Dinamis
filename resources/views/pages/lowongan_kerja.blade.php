@extends('layouts.navbar3')

@section('title')
        Lowongan Kerja
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid kotak-atas">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-12 mt-5">
           <div class="ini-link">
            <nav aria-label="breadcrumb"  data-aos="fade" data-aos-easing="ease" data-aos-delay="100">
                <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{ url('/page_siswa') }}" style="color:#36CFCF;">Beranda</a></li>
                <li class="breadcrumb-item active">Lowongan Kerja</li>
                </ol>
            </nav>
           </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 text-center">
            <div class="text-header">
                <h3 class="mb-4"  data-aos="fade" data-aos-easing="ease" data-aos-delay="100">
                    {{$loker->count()}} Peluang Untuk Masa Depan Anda 🚀
                </h3>
            </div>
        </div>
        </div>
    </div>
</div>
        <div class="container" style="margin-top: 15vh;">

           
                <div class="row justify-content-center">
                          
               

                    @foreach ($loker as $item)
                   
                    <div class="col-lg-4 col-12">
                        
                        <div class="card__work px-4 py-4"  data-aos="fade" data-aos-easing="ease" data-aos-delay="100">
                            <img src="{{ asset('images/lokasi.svg') }}" alt="img_lokasi" class="float-left mr-1">
                            <p class="lokasi">{{$item->lokasi}} <span class="button__off py-2 px-2">{{$item->jenis_pekerjaan}}</span></p>
                            <h5>{{$item->kerja_sebagai}}</h5>
                            <p class="posted__by">Posted by :</p>
                            <p class="card__content__footer">
                            <img id="myImg" src="{{ url('/data_logo/'.$item->logo) }}" alt="Karya Siswa" height="35" style="border-radius: 50%">
                            <span class="nama__perusahaan">{{$item->nama_perusahaan}}</span>
                            </p>
                        
                            <a href="{{ $item->link }}" class="btn btn-warning mt-3 py-2" style="width: 100%" target="__blank">Check Details</a>
                        </div>

                    </div>
                   
                    @endforeach
                    
                </div>
        </div>
    @include('includes.footer')
        
@endsection