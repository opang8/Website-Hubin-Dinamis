@extends('layouts.admin')

@section('content')

<style>
    .card__work{
  border: 1px solid #e5e5e5;
  border-radius: 4px;
  height: 400;
  background: #ffffff;
  width: 100%;
  transition: .2s ease-in-out;
    }
    .card__work:hover {
        box-shadow: 2px 14px 22px -2px rgba(0,0,0,.1);
    }
  p{
      font-size: 14px;
      color: #8C97AC;

  }
          .button__off {
          background: #FEF2DE;
          float: right;
          color: #F5A623;
          border-radius: 5px;
          }
  
  h5 {
      font-size: 27px;
      margin-top: 22px;
      margin-top: 3rem;
      font-weight: 600;
      color: #1D293F;
      margin-bottom: 88px;
  }

  .posted__by {
      color: #B9B9B9;
      font-size: 13px;
  }

  .nama__perusahaan {
      font-size: 16px;
      font-weight: 600;
      color: #1D293F;
      margin-left: 11px;
  }


 
</style>
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <div class="container">

           
        <div class="row justify-content-center">
                  
            <div class="col-lg-4 col-12">
                
                <div class="card__work px-4 py-4">
                    <img src="{{ asset('images/lokasi.svg') }}" alt="img_lokasi" class="float-left mr-1">
                    <p class="lokasi">{{$loker->lokasi}} <span class="button__off py-2 px-2">{{$loker->jenis_pekerjaan}}</span></p>
                    <h5>{{$loker->kerja_sebagai}}</h5>
                    <p class="posted__by">Posted by :</p>
                    <p class="card__content__footer">
                    <img id="myImg" src="{{ url('/data_logo/'.$loker->logo) }}" alt="Karya Siswa" height="35" style="border-radius: 50%">
                    <span class="nama__perusahaan">{{$loker->nama_perusahaan}}</span>
                    </p>
                
                    <a target="__blank"href="{{ $loker->link }}" class="btn btn-warning mt-3 py-2" style="width: 100%">Check Details</a>
                </div>

            </div>
        
        </div>

        <a href="{{ url('/admin/loker_dashboard') }}" class="btn btn-danger font-weight-normal text-uppercase mb-5 mt-5 mr-2 py-3 px-4" type="submit">
            <i class="fas fa-long-arrow-alt-left  mr-1"></i> Kembali
        </a>
</div>

</div>
    
   
  
@endsection