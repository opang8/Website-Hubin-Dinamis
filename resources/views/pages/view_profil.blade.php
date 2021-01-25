<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tinjau Resume</title>

    <script src="https://kit.fontawesome.com/f96fcdca2b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
     <link rel="shortcut icon" href="{{ asset('images/icon_website.svg') }}">
    <link rel="stylesheet" href="{{ asset("libraries/bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("style/show_resume.css") }}">

    <style>
#myImg {
     
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    position: relative;
}

#myImg:hover {
    transform: scale(1.1);
    opacity: 0.7;
    
}

 
/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content1 {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content1, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content1 {
        width: 100%;
    }
}
    </style>
</head>
<body>
    
    <!-- Navbar -->
    <div class="container fixed-top">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                <a href="{{ url("/page_siswa") }}" class="navbar-brand"><img src="{{ url('images/logo hubin.svg') }}" alt="">
        
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">
                        | &nbsp; Hubungan Industri Smkn 1 Cibinong
                    </span>
                </li>
            </ul>
        </nav>  
        </div>
    
    </div>

    <div class="container" style="margin-top: 15vh;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="{{ url('/page_perusahaan') }}" style="color:#36CFCF;">Kembali</a></li>
            <li class="breadcrumb-item active">Resume {{$siswa->nama}}</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    </div>

    <div class="container justify-content-center" style="margin-top: 5vh;">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                
                    <img id="myImg2" src="{{ url('/data_file/'.$siswa->foto) }}" height="170">
                
                <div class="img__name" style="">
                    {{ $siswa->nama}}
                </div>
                <div class="small__text" style="">
                    {{$siswa->jurusan}} '{{$siswa->angkatan}}
                </div>
            </div>
        </div>
        
        <section class="sec1">
            <div class="row content-box">
                <div class="col-lg-12 col-12">
                    <div class="information">
                        <div class="row mb-4">
                            <div class="col-lg-8 col-12">
                                <img class="mb-2" height="60px" src="{{ url('images/logo hubin.svg') }}" alt="logo hubin">
                                <p class="text-muted">Hubungan Industri | Smkn 1 Cibinong</p>
                            </div>

                            <div class="col-lg-4 text-right col-12 d-none d-lg-block">
                                <p class="mb-0 mt-2">
                                Dibuat Pada:  {{$siswa->created_at->format('d F Y')}}<br>
                                </p>
                                <p class="mb-0">
                                Status : Pengguna
                                </p>
                                <p>
                                Kebutuhan : {{$siswa->kebutuhan}}
                                </p>
                            </div>

                            <div class="col-lg-4 col-12 d-lg-none">
                                <p class="mb-2 mt-2">
                                    Dibuat Pada:  {{$siswa->created_at->format('d F Y')}}<br>
                                </p>
                                <p>
                                    Status : Pengguna
                                </p>
                            </div>

                            
                        </div>
                        <hr class="mb-4">
                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p class="mb-2 text-blue">
                                    Penyedia
                                </p>
                                <p class="mb-1">
                                    <b>Hubungan Industri</b>
                                </p>
                                <p class="mb-1">
                                    hubinSmkn1@gmail.com
                                </p>
                                <p class="mb-1">
                                    +62 89611569578 (Admin)
                                </p>
                                <p class="mb-1  mb-3">
                                    www.hubin.smkn1cibinong.sch.id
                                </p>
                            </div>

                            

                            <div class="col-lg-6 text-right col-12 d-none d-lg-block">
                                <p class="mb-2 text-blue">
                                    Pengguna
                                </p>
                                <p class="mb-1">
                                    <b>{{ $siswa->nama}}</b>
                                </p>
                                <p class="mb-1">
                                    {{$siswa->email}}
                                </p>
                                <p class="mb-1">
                                   Jurusan, {{$siswa->jurusan}} '{{$siswa->angkatan}}
                                </p>
                            </div>

                            {{-- terlihat pada layar sm --}}
                            <div class="col-lg-6 col-12  d-lg-none">
                                <p class="mb-2 text-blue">
                                    Pengguna
                                </p>
                                <p class="mb-1">
                                    <b>{{ $siswa->nama}}</b>
                                </p>
                                <p class="mb-1">
                                    {{$siswa->email}}email
                                </p>
                                <p class="mb-1">
                                   Jurusan, {{$siswa->jurusan}} '{{$siswa->angkatan}}
                                </p>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-12 col-12">
                                <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                                <thead class="thead-light">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">input data</th>
                                <th scope="col">Output data</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td width="45%">Nama Lengkap</td>
                                <td>
                                    {{$siswa->nama}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Nisn</td>
                                <td>{{$siswa->nisn}}
                                 </td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Jenis Kelamin</td>
                                <td>{{$siswa->jenis_kelamin}}
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">4</th>
                                <td>Jurusan</td>
                                <td>{{$siswa->jurusan}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">5</th>
                                <td>Angkatan</td>
                                <td>{{$siswa->angkatan}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">6</th>
                                <td>Kebutuhan yang diajukan</td>
                                <td class="text_orange">{{$siswa->kebutuhan}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">7</th>
                                <td>Keahlian Yang di Miliki</td>
                                <td>{{$siswa->keahlian}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">8</th>
                                <td>Kepribadian</td>
                                <td>{{$siswa->kepribadian}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">9</th>
                                <td>Alamat Tinggal</td>
                                <td>{{$siswa->alamat}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">10</th>
                                <td>Kota / Kabupaten</td>
                                <td>{{$siswa->kota_kabupaten}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">11</th>
                                <td>Nomor Telepon</td>
                                <td class="text_orange">{{$siswa->no_telepon}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">12</th>
                                <td>Alamat Email</td>
                                <td class="text_orange">{{$siswa->email}}
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">13</th>
                                <td>Karya</td>
                                <td><img id="myImg" src="{{ url('/data_karya/'.$siswa->karya) }}" alt="Karya Siswa" height="160">
                                </td>
                                </tr>
                                </tbody>
                                </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
                
                  
                    <a href="{{ url('/page_perusahaan') }}" class="btn btn-danger font-weight-normal text-uppercase mb-5 mt-5 mr-2 py-3 px-4" type="submit">
                        <i class="fas fa-long-arrow-alt-left  mr-1"></i> Kembali
                    </a>
                    <a href="{{ url('/cetak_pdf', $siswa->id) }}" class="btn btn-light font-weight-normal text-uppercase mb-5 mt-5 mr-2 py-3 px-4" target="_blank">
                        <i class="fas fa-file-pdf mr-1"></i>CETAK PDF
                    </a>
        
               
          
        </section>
       

        <!-- The Modal -->
        <div id="myModal" class="modal1">
        <span class="close">×</span>
        <img class="modal-content1" id="img01">
        <div id="caption"></div>
        </div>
                
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">APAKAH SUDAH YAKIN?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                Resume yang sudah anda buat tidak bisa di ganti lagi setelah meninggalkan halaman ini
                Jika anda ingin mengganti silahkan hubungi admin kami
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ url('/sukses') }}" type="submit" class="btn btn-primary">Oke</a>
                </div>
            </div>
            </div>
        </div>
    
      
    
    
    

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).scroll(function(){
			$('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
		});
        // Get the modal
        var modal = document.getElementById('myModal');
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        
        
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            modalImg.alt = this.alt;
            captionText.innerHTML = this.alt;
        }
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }
        </script>
        
</body>
</html>