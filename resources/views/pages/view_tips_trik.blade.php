@extends('layouts.navbar4')

@section('title')
       Tips dan Trik
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid kotak-atas">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-12 mt-5">
            <nav aria-label="breadcrumb" data-aos="fade" data-aos-easing="ease" data-aos-delay="100">
                <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{ url('/page_siswa') }}" style="color:#36CFCF;">Beranda</a></li>
                <li class="breadcrumb-item "><a href="{{ url('/tips_trik') }}" style="color:#36CFCF;">Tips dan Trik</a></li>
                <li class="breadcrumb-item ">{{$item->judul}}</li>
                </ol>
            </nav>
        </div>
        </div>
        
    </div>
</div>
        <div class="container">

                <div class="row">
                        <div class="col-lg-8 pl-lg-0">
                            <div class="box-content" data-aos="fade" data-aos-easing="ease" data-aos-delay="100" style="margin-bottom: 190px;">
                            <div class="col-lg-12">
                                 <p class="mb-4 text-muted">
                                     
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                <i class="fab fa-twitter mr-3">
                                    <a class="ml-2 text-muted" href="http://twitter.com/share?url=http://www.HUBIN.com&text=Artikel&hashtags={{$item->judul}}" target="_blank">Share Artikel</a>
                                </i>
                                 
                                 <i class="far fa-copy mr-3"  onclick="copyToClipboard('#p1')" style="cursor: pointer;"><a class="text-muted ml-2" href="" class="ml-2">Copy Artikel</a></i>
                                 <i class="far fa-calendar-alt"><span class="ml-2">{{$item->created_at->format('d F Y')}}</span></i>  
                                 </p>
                                <h4 class="mb-4">
                                    {{$item->judul}}
                                </h4>
                                <img id="myImg2" src="{{ url('/data_gambar/'.$item->gambar) }}" height="300" class="mb-0">
                                <div class="mt-3" id="p1" >
                                    <p class="d-none">
                                        {{$item->judul}}
                                    </p>
                                    {!!$item->text!!}     
                                </div>   
                            </div>
                        </div>
                </div>

                
                    <div class="col-lg-4">
                        <div class="box-content" data-aos="fade" data-aos-easing="ease" data-aos-delay="100">
                            <h5 style="color:#36CFCF;">
                                Terbaru
                            </h5>

                            <hr>
                            @foreach ($tips as $item)
                            <h5 class="mb-4">
                                <a href="{{ route('view_Tips.show', $item->id)}}" class="text-muted" >
                                   {{$item->judul}}
                               </a>
                            </h5>
                            <p>
                                <img id="myImg2" src="{{ url('/data_gambar/'.$item->gambar) }}" height="90" class="mb-4">
                            </p>
                            <hr>
                           
                            @endforeach
                            <p>
                               <a href="{{ url('/tips_trik') }}" class="text-muted"  data-aos="fade-up" data-aos-easing="ease" data-aos-delay="100">
                                Lihat Semua <i class="fas fa-long-arrow-alt-right" style="color:#26DCA2;"></i>
                               </a>
                            </p>
                        </div>
                    </div>
                
        </div>

        
    @include('includes.footer')
@endsection

