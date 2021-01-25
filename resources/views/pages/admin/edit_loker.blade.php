@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 {{-- <div class="container-fluid">

   <div class="row mt-3">
   
  <div class="col-xl-7 col-md-6 mb-4 bg-white shadow ">
    <h3 class="mt-3">Posting Loker</h3>

    <form action="">
        <div class="form-group mt-3">
            <label for="Lokasi" class="font-weight-bold">Lokasi</label>
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
        <div class="col-lg-7 mb-4">

          <!-- Project Card Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Posting Loker</h6>
            </div>
            <div class="card-body">
                @foreach ($loker as $item)
                <form action="{{ route('action-table2.update', $item->id)  }}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    
                    <div class="form-group mt-1">
                        <label for="Lokasi" class="font-weight-bold">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Pekerjaan" id="lokasi" required value="{{ $item->lokasi }}">
                    </div>
            
                    <div class="form-group mt-3">
                        <label for="pekerjaan" class="font-weight-bold">Jenis Pekerjaan</label>
                        <select class="form-control" name="pekerjaan" id="pekerjaan">
                            <option value="Remote" @if(old('jenis_pekerjaan',$item->jenis_pekerjaan) == 'Remote') selected @endif>Remote (Jarak Jauh)</option>
                            <option value="Full time" @if(old('jenis_pekerjaan',$item->jenis_pekerjaan) == 'Full time') selected @endif>Full-time (Waktu Penuh)</option>
                            <option value="Part Time" @if(old('jenis_pekerjaan',$item->jenis_pekerjaan) == 'Part Time') selected @endif>Part-time (Paruh Waktu)</option>
                            <option value="Magang" @if(old('jenis_pekerjaan',$item->jenis_pekerjaan) == 'Magang') selected @endif>Internship (Magang)</option>
                          </select>
                    </div>
            
                    <div class="form-group mt-3">
                        <label for="kerja" class="font-weight-bold">Kerja Sebagai</label>
                        <input type="text" class="form-control" name="kerja_sebagai" placeholder="ex : Desainer" id="kerja" required value="{{ $item->kerja_sebagai }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="font-weight-bold">Masukkan Logo Perusahaan</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="logo" required>
                    </div>
            
                    <div class="form-group mt-3">
                        <label for="perusahaan" class="font-weight-bold">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan" placeholder="required" id="perusahaan" required value="{{ $item->nama_perusahaan }}">
                    </div>
            
                    <div class="form-group mt-3">
                        <label for="link" class="font-weight-bold">Masukkan Link Website</label>
                        <input type="text" class="form-control" name="link" placeholder="required" id="link" required value="{{ $item->link }}">
                    </div>
                    
                    <button class="btn btn-success mb-2 mt-2" style="width:100%;">
                        Posting
                    </button>
                </form>
                @endforeach 
            </div>
          </div>

          <a href="{{ url('/admin/loker_dashboard') }}" class="btn btn-danger font-weight-normal text-uppercase mb-5 mt-5 mr-2 py-3 px-4" type="submit">
            <i class="fas fa-long-arrow-alt-left  mr-1"></i> Kembali
           </a>
          
        </div>
        
       
 </div>

@endsection