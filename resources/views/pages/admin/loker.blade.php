@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
      <h1 class="h3 mb-0 text-gray-800">Lowongan Kerja</h1>
    </div>
      @if (session('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
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
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Postingan Loker</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"> {{ $loker->count() }} </div>
              </div>
              <div class="col-auto">
                  
                <i class="fas fa-fw fa-briefcase fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

       

    </div>

    
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="{{ route('posting_loker') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> Posting Loker</a>
    </div>
    <div class="row bg-white mt-4 shadow">
        <div class="col mt-5"> 
         <table class="table table-responsive-lg table-responsive-md table-responsive-sm">
           <thead class="thead-light">
             <tr>
               <th scope="col">No</th>
               <th scope="col">Nama Perusahaan</th>
               <th scope="col">Jenis Pekerjaan</th>
               <th scope="col">Kerja Sebagai</th>
               <th width="col">Nama Perusahaan</th>
               <th width="col">Tanggal Posting</th>
               <th width="col">Logo</th>
               <th width="col">Action</th>               
             </tr>
           </thead>
           <tbody>
            
              @php
                  $i=1
              @endphp
                 @foreach ($loker as $item)
                     
              
             <tr>
             <th scope="row">{{$i++}}</th>
              <td>{{$item->lokasi}}</td>
               <td>{{$item->jenis_pekerjaan}}</td>
               <td>{{$item->kerja_sebagai}}</td>
               <td>{{$item->nama_perusahaan}}</td>
               <td> {{$tanggal}}</td>
              
               <td><img id="myImg" src="{{ url('/data_logo/'.$item->logo) }}" alt="Karya Siswa" height="40" style="border-radius: 50%"></td>
               <td>
                  <a href="{{ route('action-table2.show', $item->id)}}" class="btn btn-info" ><i class="fas fa-eye"></i></a>
                  <a href="{{ route('action-table2.edit', $item->id)}}" class="btn btn-warning"  ><i class="fas fa-pen-square"></i></a>
                  <form action="{{ route('action-table2.destroy', $item->id)}}" method="post" class="d-inline">
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
      {{ $loker->links() }}
   </div>

</div>
    
   
  
@endsection