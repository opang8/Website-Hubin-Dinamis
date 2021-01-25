@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
      <h1 class="h3 mb-0 text-gray-800">Resume</h1>
    </div>

    
      @if (session('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
      @endif
      
      {{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			 {{ $errors->first('file') }} 
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			  {{ $sukses }} 
		</div>
		@endif
     

    <!-- Content Row -->
    <div class="row ">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Resume</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$total->count()}} </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-fw fa-file-signature fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

       <!-- Earnings (Monthly) Card Example -->
       <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Resume Harian</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$per_hari}} </div>
               <div class="text-xs mt-4">
                {{$tanggal}}
              </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Resume Bulanan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$per_bulan}} </div>
              <div class="text-xs mt-4">
                {{$bulan}}
              </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
    

    </div>

    <!-- Content Row -->
    <div class="d-sm-flex align-items-center justify-content-end mb-2 mt-5">
      <h1 class="h3 mb-0 text-gray-800"></h1>
      <button href="{{ route('upload') }}" class="d-none d-sm-inline-block btn btn-sm btn btn-info shadow-sm mr-2"
        data-toggle="modal"
        data-target="#importExcel">
        <i class="fas fa-download fa-sm text-white-50"></i>
          Import Data
      </button>

      <!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-info">Import Data</button>
						</div>
					</div>
				</form>
			</div>
    </div>
    
      <a href="{{ route('download') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm "><i class="fas fa-upload fa-sm text-white-50 mr-1"></i>Eksport Data</a>
    </div>

    <div class="row bg-white mt-4 shadow" >
        <div class="col mt-5"> 
         <table class="table table-responsive-lg table-responsive-md table-responsive-sm">
           <thead class="thead-light">
             <tr>
               <th scope="col">No</th>
               <th scope="col">Nama</th>
               <th scope="col">Jurusan</th>
               <th scope="col">Angkatan</th>
               <th scope="col">Nisn</th>
               <th width="col">Kebutuhan</th>
               <th width="col">Tanggal Buat</th>
               <th width="col">Action</th>
               
             </tr>
           </thead>
           <tbody>
            @php $i=1 @endphp
             @foreach ($resume as $read)
             <tr>
               <th scope="row">{{ $i++ }}</th>
               <td>{{ $read->nama }}</td>
               <td>{{ $read->jurusan }}</td>
               <td>{{ $read->angkatan }}</td>
               <td>{{ $read->nisn }}</td>
               <td class="text-danger font-weight-bold">{{ $read->kebutuhan }}</td>
               <td> {{$tanggal}}</td>
               
 
 
               <td>
                 
                  <a href="{{ route('action-table.show', $read->id)}}" class="btn btn-info" ><i class="fas fa-eye"></i></a>
                  <a href="{{ route('action-table.edit', $read->id)}}" class="btn btn-warning"  ><i class="fas fa-pen-square"></i></a>
                  <form action="{{ route('action-table.destroy', $read->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                  <button type="submit" class="btn btn-danger mt-1"><i class="fas fa-trash-alt"></i></button>
                 </form>
               </td>

             </tr>
 
             
             @endforeach
 
           </tbody>
         </table>
        </div>

        
     </div>
     <div class="mt-4">
        {{ $resume->links() }}
     </div>
    </div>
    
   
  <!-- /.container-fluid -->
  {{-- <div class="row mt-3">
    <!-- Earnings (Monthly) Card Example -->
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
</div> --}}
@endsection