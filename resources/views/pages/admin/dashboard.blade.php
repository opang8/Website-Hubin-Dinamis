@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
      <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
    </div>

    <!-- Content Row -->
    <div class="row ">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah siswa terdaftar</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$siswa}} <span class="text-xs">siswa</span></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
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
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Admin terdaftar</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$admin}} <span class="text-xs">admin</span></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users-cog fa-2x text-gray-300"></i>
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
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Perusahaan Terdaftar</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$perusahaan}} <span class="text-xs">perusahaan</span></div>
              </div>
              <div class="col-auto">
                <i class="fas fa-building fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      

     
    </div>

    

    <div class="row bg-white shadow mt-4">
       <div class="col mt-5"> 
        <table class="table table-responsive-lg table-responsive-md table-responsive-sm">
          <thead class="thead-light">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Peran</th>
              <th width="col">Tanggal Buat</th>
            </tr>
          </thead>
          <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($users as $read)
                
           
            <tr>
              <th scope="row">{{ $i++ }}</th>
              <td>{{ $read->name }}</td>
              <td>{{ $read->email }}</td>

              <td>{{ $read->roles }}</td>
              <td>{{ $read->created_at->format('d/m/Y H:i:s') }}</td>
              
            </tr>

            
            @endforeach

          </tbody>
        </table>
       </div>
    </div>
    <div class="mt-4">
      {{ $users->links() }}
   </div>

  </div>
  <!-- /.container-fluid -->

@endsection