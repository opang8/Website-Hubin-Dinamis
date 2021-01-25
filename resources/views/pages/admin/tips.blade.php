@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">
   @if (session('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
      @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
      <h1 class="h3 mb-0 text-gray-800">Tips dan Trik</h1>
    </div>
    
      

    <!-- Content Row -->
    <div class="row ">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Postingan </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> {{$tips->count()}} </div>
              </div>
              <div class="col-auto">
                  
                <i class="fab fa-blogger-b fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

       

    </div>

  

    
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{ route('posting_tips') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Posting Artikel</a>
      </div>
    <div class="row bg-white mt-4  shadow ">
      <div class="container">
      @foreach ($tips as $item)
        <div class="col mt-4 mb-4"> 
          <div class="row justify-content-center">
           <div class="col-lg-8 bg-light">
              <div class="float-left">
                <h4 class="mt-2">
                  {{$item->judul}}
                </h4>
                <p class="text-xs mb-0">
                 Dibuat : {{ $item->created_at->format('d F Y')}}
                </p>
                <p class="text-xs">
                  Diupdate : {{$item->updated_at->format('d F Y')}}
                </p>
              </div>
              <img id="myImg2" src="{{ url('/data_gambar/'.$item->gambar) }}" height="60" class="float-right mt-2">
           </div>

           <div class="col-2">
            <a href="{{ route('action-table4.show', $item->id)}}" class="btn btn-info" ><i class="fas fa-eye"></i></a>
            <a href="{{ route('action-table4.edit', $item->id)}}" class="btn btn-warning"  ><i class="fas fa-pen-square"></i></a>
            <form action="{{ route('action-table4.destroy', $item->id)}}" method="post" class="d-inline">
              @csrf
              @method('delete')
            <button type="submit" class="btn btn-danger mt-1"><i class="fas fa-trash-alt"></i></button>
           </form>
           </div>
          </div>
        </div>
          @endforeach
        </div>

        
     </div>
     <div class="mt-4">
        
     </div>

</div>
    
   
  
@endsection