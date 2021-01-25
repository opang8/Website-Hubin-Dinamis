<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

</head>
<body>
   
    <div class="background__kiri">
        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>AKUN MU BERHASIL TERDAFTAR </strong> Klik Button untuk melanjutkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <div class="container text__kiri text-center ">
            <div class="row">
                <div class="col-lg-6 col-sm-12 mt-5">
                    <h4>Masuk Sebagai <span style="color: #EC8322"> SISWA </span></h4>
                    <p class="mt-2">Temukan Loker dan Buat Resume Gratis</p>
                    <a href="{{ url('/page_siswa') }}" class="btn btn-getstarted mt-4">
                        <i class="fa fa-user-circle mr-2" aria-hidden="true"></i>Get Started</a>
                </div>

                <div class="col-lg-6 col-sm-12 mt-5">
                    <h4>Masuk Sebagai <span style="color: #EC8322"> PERUSAHAAN </span></h4>
                    <p class="mt-2">Temukan Karyawan ,  dan Siswa Magang Smkn 1 Cibinong</p>
                    <a href="{{ url('/page_perusahaan') }}" class="btn btn-getstarted mt-4">
                        <i class="fa fa-building-o mr-2" aria-hidden="true"></i>Get Started</a>
                </div>
            </div>
        </div>
    </div>

  
     

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>