@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 {{-- <div class="container-fluid">

   <div class="row mt-3">
   
  <div class="col-xl-7 col-md-6 mb-4 bg-white shadow ">
    <h3 class="mt-3">Posting Loker</h3>

    <form action="">
        <div class="form-group mt-3">
            <label for="judul" class="font-weight-bold">Lokasi</label>
            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Pekerjaan" id="lokasi">
        </div>

        <div class="form-group mt-3">
            <label for="pekerjaan" class="font-weight-bold">Jenis Pekerjaan</label>
            <select class="form-control">
                <option value="Remote">Remote (Jarak Jauh)</option>
                <option value="Full time">Full-time (Waktu Penuh)</option>
                <option value="Part Time">Part-time (Paruh Waktu)</option>
                <option value="Magang">Internship (Magang)</option>
              </select>
        </div>

        <div class="form-group mt-3">
            <label for="kerja" class="font-weight-bold">Kerja Sebagai</label>
            <input type="text" class="form-control" name="lokasi" placeholder="ex : Desainer" id="kerja">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlFile1" class="font-weight-bold">Masukkan Logo Perusahaan</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="form-group mt-3">
            <label for="kerja" class="font-weight-bold">Nama Perusahaan</label>
            <input type="text" class="form-control" name="lokasi" placeholder="" id="kerja">
        </div>

        <div class="form-group mt-3">
            <label for="kerja" class="font-weight-bold">Masukkan Link Website</label>
            <input type="text" class="form-control" name="lokasi" placeholder="" id="kerja">
        </div>
        
        <button class="btn btn-success mb-3" style="width:100%;">
            Posting
        </button>
    </form>
  </div>
</div>  --}}

 <div class="container-fluid">
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Posting Tips </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('action-table4.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="judul" class="font-weight-bold">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="" id="judul" required>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Gambar Konten</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                    </div>
            
                     
                     <div class="form-group">
                      <label for="exampleFormControlFile1" class="font-weight-bold">Text</label>
                       <textarea class="ckeditor" id="ckedtor" name="text"></textarea>
                    </div>
            
                   
                    <button class="btn btn-success mb-2 mt-2" style="width:100%;">
                        Posting
                    </button>
                </form>
            </div>
          </div>

          <a href="{{ url('/admin/tips_dashboard') }}" class="btn btn-danger font-weight-normal text-uppercase mb-5 mt-5 mr-2 py-3 px-4" type="submit">
            <i class="fas fa-long-arrow-alt-left  mr-1"></i> Kembali
            </a>
        </div>
        
      
 </div>

@endsection