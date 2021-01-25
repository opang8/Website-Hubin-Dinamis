@extends('layouts.navbar4')

@section('title')
        Tips dan Trik dunia kerja
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid kotak-atas">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-12 mt-5">
            <nav aria-label="breadcrumb" data-aos="fade" data-aos-easing="ease" data-aos-delay="100">
                <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{ url('/page_siswa') }}" style="color:#36CFCF;">Beranda</a></li>
                <li class="breadcrumb-item ">Tips dan Trik</li>
                </ol>
            </nav>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-12 text-center">
            <h3 class="mb-4" data-aos="fade" data-aos-easing="ease" data-aos-delay="100">
                Perluaslah Wawasan Anda 💡
            </h3>
            </div>
            </div>
    </div>
</div>
        <div class="container">

                <div class="row justify-content-center" style="margin-top: 15vh;">
                        <div class="col-lg-10">
                            <div class="box-content" data-aos="fade" data-aos-easing="ease" data-aos-delay="100">
                                
                                @foreach ($tips as $item)
                                    
                                <div class="row mb-3">
                            <div class="col-lg-3 ml-4">
                                <img id="myImg2" src="{{ url('/data_gambar/'.$item->gambar) }}" width="100%" class="mb-3">
                            </div>
                            <div class="col-lg-7  ml-4">
                                <p style="color:#26DCA2; font-size:13px;" class="mb-1">
                                    Tips dan Trik
                                </p>
                                <p class="mb-1" style=" font-family: 'Merriweather', serif;
                                color: #18165D;
                                font-weight: 200;
                                font-size: 20px;
                                ">
                                   {{$item->judul}}
                                </p>
                            
                                <div  style="font-size: 13px;">
                                    {!!\Illuminate\Support\Str::limit($item->text, 120, '[...]')!!}
                                 
                                </div>
                                
                                <a  class="text-muted" href="{{ route('beranda.show', $item->id) }}" style="font-size: 13px;">
                                    Lihat Selengkapnya <i class="fas fa-long-arrow-alt-right ml-1" style="color:#26DCA2;"></i>
                                </a>
                            </div>
                            </div>
                            @endforeach

                            {{$tips->links()}}
                     
                   
                </div>
                        </div>
                </div>
        </div>
        
        
    @include('includes.footer')
@endsection