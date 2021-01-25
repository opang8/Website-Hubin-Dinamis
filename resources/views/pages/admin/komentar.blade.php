@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
      <h1 class="h3 mb-0 text-gray-800">Komentar</h1>
    </div>

    <!-- Content Row -->
    <div class="row ">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Komentar</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$komentar->count()}} </div>
              </div>
              <div class="col-auto">
                  
                <i class="fas fa-fw fa-comments fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
         
        @foreach ($komentar as $item)
            
       
        <div class="col-lg-4 mt-5">
            <form action="{{ route('siswa.destroy', $item->id)}}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-link"><i class="fas fa-window-close"></i></button>
            </form>
            <div class="card mb-4 py-3 border-bottom-success">
              <div class="card-body">
                 <div class="row">
                  <div class="col-12">
                    <img src="{{ asset('/images/avatars.svg') }}" alt="avatars" width="40px" class="float-left">
                   <div class="float-left ml-3">
                        <p class="mb-0 text-success">{{$item->nama}}</p>
                        <p class="mb-3 text-xs">{{$item->jurusan}} '{{$item->angkatan}} <br></p>
                   </div>
                </div>
                 </div>
                  <div class="row">
                    <div class="col-12">
                      <p class="float-left">
                        {{$item->pendapat}}
                    </p>
                    </div>
                  </div>
              </div>
             <div class="container" class="float-left">
              <p style="font-size: 12px;">
                {{$tanggal}}
              </p>
             </div>
            </div>
  
        </div>

        @endforeach

       
</div>
    
   
  
@endsection