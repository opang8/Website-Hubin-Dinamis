@extends('layouts.app')

@section('title')
    HUBIN | Hubungan Industri
@endsection

@section('content')


    <header class="text-center"  data-aos="fade" data-aos-easing="ease" data-aos-delay="500">
        <h1 >Show Them Your Skills <br> 
            and Get Hired, Quickly</h1>
        <img src="{{ asset('images/iconheader.svg') }}" alt="">
        <p class="text__header">Carilah pekerjaan , yang jika anda kerjakan, anda mencintainya.</p>
        <a href="#get_started" class="btn btn-loker mt-5 ml-3">Get Started <i class="fas fa-arrow-alt-circle-down ml-1"></i></a>
    </header>

    <main>
        <section class="sec1" id="get_started">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{ asset('images/partners.png') }}" alt="Logo Partner" class="img-fluid img-partner" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="personal-img d-none d-md-none d-lg-block">
                            <img src="{{ asset('images/img-sec1.png') }}" alt="image" class="img-fluid" data-aos="zoom-in" data-aos-easing="ease" data-aos-delay="900"> 
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center keahlian"  data-aos="zoom-in-left" data-aos-easing="ease" data-aos-delay="500">
                        <h2 class="sans-bold">Kenalkan<br>
                            keahlianmu</h2> 
                        <P class="mt-3">Buat resume online, untuk peroleh peluang kerja <br>
                                lebih baik sesuai dengan keahlianmu
                        </P>
                               <a href="{{ url('/buat_resume') }}" class="btn btn-resume mt-5">
                                Buat Resume <i class="fas fa-file-invoice ml-1"></i>
                               </a>   
                    </div>
                </div>
            </div>
            
        </section>
        
        <section class="sec2">
            <section class="overflow-hidden position-relative">
                <div class="container">
                <div class="bg__grub--slider p-3">
                    <div class="row pt-5 pb-5 pl-4">
                    <div class="col-md-5 col-lg-4 pb-5 text-center text-md-left pb-md-0 my-auto">
                        <h2 class="sans-bold mb-3" data-aos="fade-up" data-aos-easing="ease">Lowongan kerja</h2>
                        <p data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300">Lihat lebih banyak loker yang kami sediakan berdasarkan kompetensi keahlian.</p>
            
                        <ul class="ul__list--inline slider__arrow">
                        <li class="arrow__left pointer mr-3 position-relative"><i class="fa fa-chevron-left" aria-hidden="true"></i></li>
                        <li class="arrow__right pointer position-relative"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                        </ul>
            
                    </div>
                    <div class="col-md-7 col-lg-8 my-auto">
            
                        <ul class="ul__list--inline slider__offset">
                        <li class="pl-3 pr-3 images__slider no__outline">
                            <img src="{{ asset('images/slide1.svg') }}" alt="image slide 1" >
                        </li>
                        <li class="pl-3 pr-3 images__slider no__outline">
                            <img src="{{ asset('images/slide2.svg') }}" alt="image slide 2" >
                        </li>
                        <li class="pl-3 pr-3 images__slider no__outline">
                            <img src="{{ asset('images/slide3.svg') }}" alt="image slide 3" >
                        </li>
                        <li class="pl-3 pr-3 images__slider no__outline">
                            <img src="{{ asset('images/slide4.svg') }}" alt="image slide 4" >
                        </li>
                        <li class="pl-3 pr-3 images__slider no__outline">
                            <img src="{{ asset('images/slide5.svg') }}" alt="image slide 4" >
                        </li>
                        </ul>
            
                    </div>
                    </div>
                </div>
                </div>
            </section>
        </section>

        <section class="sec3" id="">
            {{-- <div class="container">
                <div class="row">
                    <div class="col">
                        <h3 class="sans-bold mt-2"> 
                        Temukan pekerjaan <br> yang sesuai minat
                        </h3>
                        <p class="mt-3">
                            Kami membantumu untuk menemukan <br>pekerjaan, hanya 1x klik.
                        </p>
                        
                    </P>
                    </div>
                </div>
                 
                <div class="row">
                    @foreach ($loker as $item)
                   
                    <div class="col-lg-4 col-12">
                        
                        <div class="card__work mt-5 px-4 py-4">
                            <img src="{{ asset('images/lokasi.svg') }}" alt="img_lokasi" class="float-left mr-1">
                            <p class="lokasi">{{$item->lokasi}} <span class="button__off py-2 px-2">{{$item->jenis_pekerjaan}}</span></p>
                            <h5>{{$item->kerja_sebagai}}</h5>
                            <p class="posted__by">Posted by :</p>
                            <p class="card__content__footer">
                            <img id="myImg" src="{{ url('/data_logo/'.$item->logo) }}" alt="Karya Siswa" height="35" style="border-radius: 50%">
                            <span class="nama__perusahaan">{{$item->nama_perusahaan}}</span>
                            </p>
                        
                        <a href="{{ $item->link }}" class="btn btn-warning mt-3 py-2" style="width: 100%">Check Details</a>
                        </div>
                    </div>
                   
                    
                    @endforeach
                    </div>
                        <div class="mt-3">
                            <a href="{{ url('/lowongan_kerja') }}" class="btn btn-resume mt-5">
                                View All
                            </a> 
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="container">
                <div class="row ">
                    
                    <div class="col-lg-6 align-self-center keahlian"  data-aos="zoom-in-right" data-aos-easing="ease" data-aos-delay="500">
                        <h2 class="sans-bold ">Temukan Pekerjaan<br>
                        yang sesuai minat <br>
                        dan keahlianmu</h2> 
                        <P class="mt-3">Kami membantumu untuk menemukan<br>
                            pekerjaan, hanya 1x klik dan memulai.
                        </P>
                               <a href="{{ url('/lowongan_kerja') }}" class="btn btn-resume mt-5">
                                Arahkan Saya <i class="fas fa-briefcase ml-1"></i>
                               </a>  
                    </div>

                    <div class="col-lg-6">
                        <div class="personal-img d-none d-md-none d-lg-block">
                            <img src="{{ asset('images/img-sec3.png') }}" alt="image" class="img-fluid"  data-aos="zoom-in" data-aos-easing="ease" data-aos-delay="900"> 
                        </div>
                    </div>
                </div>
            </div>
            
            
        </section>

        <section class="sec4">
            <div class="container-fluid justify-content-center">
                <div class="row">
                    <div class="col text-center">
                       <h2> Alumni Stories</h2>
                       <p class="mt-3">Dengarkan pendapat dari beberapa pengguna kami.</p>
                    </div>
                </div>
                <div class="row mt-3 mb-3" data-aos="fade-up"> 
                    <div class="col-lg-4 col-12 mb-3  mt-3">
                        <div class="komentar">

                            <p style="    font-weight: 400;
                            line-height: 1.5;">
                                " Akhirnya saya dipekerjakan oleh pihak perusahaan setelah saya membuat resume online di website ini,Terimakasih HUBIN :]"
                            </p>
                            <hr>
                            <img src="{{ asset('images/avatars4.svg') }}" alt="" class="float-left mr-3" width="50px">
                            <div class="user_name">
                                <h5 class="mb-1" style="color: #1D293F;">Steven</h5>
                                <p style="color: #7C8087;">Multi Media'18</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-lg-4 col-12 mb-3  mt-3">
                        <div class="komentar">

                            <p style="font-weight: 400;
                            line-height: 1.5;">
                               " kereeeenn! website ini membantu saya dalam mencari pekerjaan yang sesuai dengan keahlian yang saya miliki."
                            </p>
                            <hr>
                            <img src="{{ asset('images/user2.svg') }}" alt="" class="float-left mr-3" width="50px">
                            <div class="user_name">
                                <h5 class="mb-1" style="color: #1D293F;">Angga</h5>
                                <p style="color: #7C8087;">Teknik Kendaraan Ringan'17</p>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-lg-4 col-12 mb-3  mt-3">
                        <div class="komentar">

                            <p style="font-weight: 400;
                            line-height: 1.5;">
                                " Saya sangat suka dengan tips-tips yang diberikan, ketika saya Magang itu bisa  membantu pengetahuan saya lebih luas"
                            </p>
                            <hr>
                            <img src="{{ asset('images/user3.svg') }}" alt="" class="float-left mr-3" width="50px">
                            <div class="user_name">
                                <h5 class="mb-1" style="color: #1D293F;">Nasai Samudera</h5>
                                <p style="color: #7C8087;">Teknik Komputer Jaringan'20</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3">
                        <div class="pop-up-comment">
                            <button class="open-button" onclick="openForm()">Beri Pendapat <i class="fas fa-arrow-up"></i> </button>
                            <div class="form-popup" id="myForm">
                            <form action="{{ url('/komentar') }}" class="form-container" method="post">
                                
                                @csrf
                                
                                <label for="nama"><b>Nama</b></label>
                                <input type="text" placeholder="Nama Lengkap" name="nama" required>
    
                                <label for="jurusan"><b>Jurusan</b></label>
                                <input type="text" placeholder="Required" name="jurusan" required>

                                <label for="angkatan"><b>Angkatan</b></label>
                                <input type="text" placeholder="Required" name="angkatan" required>

                                <label for="pendapat"><b>Pendapat</b></label>
                                <input type="text" placeholder="Required" name="pendapat" required>
                                
                                <button type="submit" class="btn">Kirim Pendapat</button>
                                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="sec5" id="">
            <div class="container">
              <div class="row">
                  <div class="col-lg-5 col-12">
                      <h2>Tips dan Trik</h2>
                      <p class="mt-3">Pada halaman ini kamu bisa mendapatkan berbagai 
                        tips dan trik seputar dunia kerja dan bagaimana menjadi siswa Magang yang baik</p>
                  </div>
              </div>
                @php
                    $i=1;
                  
                @endphp
              <div class="row">
                @foreach ($tips as $item)
                   @if ($loop->iteration % 2)
                    
                   <div class="col-lg-6 col-12">
                    <div class="box-content">
                        <div class="nomor text-center">
                            <p>
                                {{$i++}}
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-0 align-self-center">
                                <div class="img-content ml-3">
                                    <img id="myImg2" src="{{ url('/data_gambar/'.$item->gambar) }}" width="190" class="mt-2 d-none d-md-none d-lg-block">
                                </div>
                            </div>
                            <div class="col-lg-8 col-12  align-self-center">
                                <div class="content mr-3">
                                    <h5>
                                        {{$item->judul}}
                                    </h5>
                                    <p class="mb-2">
                                        {!!\Illuminate\Support\Str::limit($item->text, 100, '[...]')!!}
                                    </p>
                                    <p class="link">
                                        <a href="{{ route('view_Tips.show', $item->id)}}" class="link" >
                                        Selengkapnya -->
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   @else 
                   <div class="col-lg-6 col-12">
                    <div class="box-content-keatas">
                        <div class="nomor text-center">
                            <p>
                                {{$i++}}
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-0 align-self-center">
                                <div class="img-content ml-3">
                                    <img id="myImg2" src="{{ url('/data_gambar/'.$item->gambar) }}" width="190" class="mt-2 d-none d-md-none d-lg-block">
                                </div>
                            </div>
                            <div class="col-lg-8 col-12  align-self-center">
                                <div class="content mr-3">
                                    <h5>
                                        {{$item->judul}}
                                    </h5>
                                    <p class="mb-2">
                                        {!!\Illuminate\Support\Str::limit($item->text, 100, '[...]')!!}
                                    </p>
                                    <p class="link">
                                        <a href="{{ route('beranda.show', $item->id)}}" class="link" >
                                        Selengkapnya -->
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   @endif
                @endforeach
                {{-- <div class="col-lg-6 col-12">
                    <div class="box-content-keatas">
                        <div class="nomor text-center">
                            <p>
                                2
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-0 align-self-center">
                                <div class="img-content ml-3">
                                    <img class="d-none d-md-none d-lg-block" src="{{ asset('/images/img_tips2.jpg') }}" alt="" width="190px">
                                </div>
                            </div>
    
                            <div class="col-lg-8 col-12  align-self-center">
                                <div class="content mr-3">
                                    <h5>
                                        Hal yang Jangan Dilakukan Anak Baru
                                    </h5>
                                    <p class="mb-2">
                                        Anak baru punya etikanya sendiri. Salah melangkah 
                                        bisa-bisa Anda dimusuhi oleh satu kantor.[...]
                                    </p>
                                    <p class="link">
                                        Selengkapnya
                                    </p>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
              </div>

                        
              <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="box-content">
                        <div class="nomor text-center">
                            <p>
                                3
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-0 align-self-center">
                                <div class="img-content ml-3">
                                    <img class="d-none d-md-none d-lg-block" src="{{ asset('/images/img_tips.jpg') }}" alt="" width="190px">
                                </div>
                            </div>
    
                            <div class="col-lg-8 col-12  align-self-center">
                                <div class="content mr-3">
                                    <h5>
                                        Memanfaatkan Jam kerja Dapat Uang Tambahan
                                    </h5>
                                    <p class="mb-2">
                                        Selama Anda bisa berkarya dan mendapatkan penghasilan tambahan kenapa harus bersetia dengan pekerjaan utama saja. [...]
                                    </p>
                                    <p class="link">
                                        Selengkapnya
                                    </p>
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="box-content-keatas">
                            <div class="nomor text-center">
                                <p>
                                    4
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-0 align-self-center">
                                    <div class="img-content ml-3">
                                        <img class="d-none d-md-none d-lg-block" src="{{ asset('/images/img_tips3.jpg') }}" alt="" width="190px">
                                    </div>
                                </div>
        
                                <div class="col-lg-8 col-12  align-self-center">
                                    <div class="content mr-3">
                                        <h5>
                                            Persiapan Memasuki Dunia Kerja
                                        </h5>
                                        <p class="mb-2">
                                            Apa saja hal yang perlu dipersiapkan oleh calon karyawan saat memasuki kantor pertamanya?
                                            Job Desk Walaupun Anda belum sepenuhnya tahu [..]
                                        </p>
                                        <p class="link">
                                            Selengkapnya
                                        </p>
                                    </div>
                                </div>
                            </div>
                         </div>
                        </div>      
                </div>
--}}
               
                <div class="col-lg-12 d-flex justify-content-end">
                    <a href="{{ url('/tips_trik')}}" class="btn btn-resume mt-5 py-3 px-4 d-none d-lg-block" style="margin-right: 190px;" data-aos="fade-down">
                        Lebih Banyak <i class="fas fa-arrow-right ml-1"></i>
                    </a href="{{ url('/tips_trik')}}">
                    <a href="{{ url('/tips_trik')}}" class="btn btn-resume mt-5 py-3 px-4 d-lg-none">
                        Lebih Banyak <i class="fas fa-arrow-right ml-1"></i>
                    </a href="{{ url('/tips_trik')}}">
                </div>
            

        </section>
        <!-- Modal -->
        <div class="modal fade" 
        id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HAI! SELAMAT DATANG, ANDA MASUK SEBAGAI SISWA,DAN APA SAJA YANG BISA ANDA DAPATKAN DI HALAMAN UTAMA INI?</h5>
                </div>
                <div class="modal-body text-left">
                    <p class="mb-1">
                        1. MEMBUAT RESUME ONLINE YANG NANTINYA DATA YANG SUDAH ANDA INPUT, 
                        DAPAT DILIHAT OLEH BEBERAPA PERUSAHAAN YANG SUDAH BEKERJA SAMA DENGAN KAMI,DAN PIHAK PERUSAHAAN BISA MENGHUBUNGI ANDA JIKA MEMBUTUHKAN.
                    </p>
                    <p class="mb-1">
                        2. KAMI SUDAH MENYEDIAKAN PADA SATU SECTION DIMANA YANG BERISI LOWONGAN PEKERJAAN, MAUPUN UNTUK MAGANG, YANG SUDAH DISESUAIKAN DENGAN KEHALIANMU MU. HANYA SEKALI KLIK.
                    </p>
                    <p class="mb-1">
                        3. BERPENDAPAT, YA TENTUNYA PADA BAGIAN INI KAMU BISA MEMBERIKAN FEEDBACK TERHADAP WEBSITE KAMI, AGAR NANTINYA WEBSITE KAMI INI DAPAT BERKEMBANG LEBIH BAIK LAGI.
                    </p>
                    <p class="mb-1">
                        4. TIPS DAN TRIK, PADA BAGIAN INI KAMU BISA MEMBACA - BACA SEPUTAR DUNIA PEKERJAAN, DAN JUGA DAPAT BERMANFAAT MEMBUKA WAWASANMU DI DALAM DUNIA KERJA NANTINYA.
                    </p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Ya,Saya Mengerti</button>
                </div>
            </div>
            </div>
        </div>

    </main>


    

    @include('includes.footer')

@endsection

