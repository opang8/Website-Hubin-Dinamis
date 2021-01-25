@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">
  

    <div class="row bg-white shadow">
      <div class="container">
        <div class="col">
          <div>
            <img id="myImg2" src="{{ url('/data_gambar/'.$item->gambar) }}" height="200" class="mb-2 mt-5">
          </div>
          <h2 class="text-black mt-2">
            {{$item->judul}}
          </h2>
         
          <div class="mb-5 ">
            {!!$item->text!!}
          </div>
        </div>
      </div>
    </div>

     <div class="mt-4">
        
     </div>

     <a href="{{ url('/admin/tips_dashboard') }}" class="btn btn-danger font-weight-normal text-uppercase mb-5 mt-5 mr-2 py-3 px-4" type="submit">
      <i class="fas fa-long-arrow-alt-left  mr-1"></i> Kembali
    </a>

  </div>
    
   
  
@endsection