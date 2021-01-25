@extends('layouts.app_perusahaan')

@section('title')
    Temukan Karyawan | Hubungan Industri 
@endsection

@section('content')

  <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <h3 class="display-4 heading_jumbotron"> Siswa Berbakat</h3>
        <p class="lead mb-0 mt-4">Temukan karyawan dari beberapa</p>
        <p class="lead">
          alumni dan siswa di Smkn 1 Cibinong
        </p>
      </div>
  </div>

  <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5 col-12">
          <form action="/search" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control search" placeholder="Cari Berdasarkan Kompetensi">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary py-2 px-4">Cari</button>
                </span>
            </div>
        </form>
          </div>
      </div>
    
          
      
      <div class="row justify-content-center" style="margin-top: 60px">

        @foreach ($data as $d)
          <div class="col-md-4 col-lg-3 col-6 text-center">
            <div class="section-card-user mb-5">
                <div class="card-user">
                  <div class="description">
                    <h3>{{$d->nama}}</h3>
                    <P>{{$d->jurusan}} '{{$d->angkatan}}
                    </P>
                  </div>
                  <div class="img-karya mb-3">
                    <img id="myImg2" src="{{ url('/data_file/'.$d->foto) }}" height="170">
                  </div>
                  <a href="{{ action('PerusahaanController@show', $d->id) }}" class="btn btn-view">Check Details</a>
                </div>
            </div>
          </div>

          
          
          @endforeach
      </div>

      <div class="container">
         {{ $data->links() }}
          <p>
              Total data siswa yang membuat resume : {{ $data->total() }}
          </p>
      
          <p>
              Jumlah data pada halaman saat ini : {{ $data->count() }}
          </p>
          
      </div>
      

      <div class="modal fade" 
        id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HAI! SELAMAT DATANG, ANDA MASUK SEBAGAI PIHAK PERUSAHAAN,DAN APA SAJA YANG BISA ANDA DAPATKAN DI HALAMAN INI?</h5>
                </div>
                <div class="modal-body text-left">
                    <p class="mb-1">
                        1. MELIHAT SISWA DAN SISWI SMKN 1 CIBINONG DARI BERBAGAI KOMPETENSI KEAHLIAN / JURUSAN
                    </p>
                    <p class="mb-1">
                        2. MENDAPATKAN RESUME ONLINE YANG TELAH DIBUAT OLEH SISWA DAN SISWI 
                    </p>
                    <p class="mb-1">
                        3. DAN JUGA ANDA BISA MEMBERIKAN PEKERJAAN YANG DISESUAIKAN DENGAN RESUME YANG TELAH DIBUAT OLEH SISWA DAN SISWI.
                    </p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Ya,Saya Mengerti</button>
                </div>
            </div>
            </div>
        </div>

  @include('includes.footer_perusahaan')




   
@endsection