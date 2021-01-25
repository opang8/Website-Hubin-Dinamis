<!DOCTYPE html>
<html>
<head>
    <title>Data Resume {{ $siswa->nama }}</title>
    <link rel="shortcut icon" href="{{ asset('images/icon_website.svg') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		* {
            font-size: 12px;
        }
        .naik {
            margin-top:-30px !important;
        }
        .naik-table {
            margin-top:-17px !important;
        }
	</style>

                    <center>
                        <img id="myImg" src="{{ public_path('/data_file/'.$siswa->foto) }}" alt="Karya Siswa" height="90" class="mb-3">
                        <h3 style="font-family: 'Merriweather';">
                            {{$siswa->nama}}
                        </h3>
                        <p class="mb-0">
                            {{$siswa->jurusan}} '{{$siswa->angkatan}}
                        </p>
                    </center>
                    <div style="display:flex; justify-content: space-between" class="mb-0 naik">
                        <div style="text-align: left" class="mb-0">
                            <img class="mb-2" height="60px" src="{{ public_path('images/logo hubin.svg') }}" alt="logo hubin">
                            <p class="text-muted">Hubungan Industri | Smkn 1 Cibinong</p>
                        </div>

                        <div style="text-align: right">
                            <p class="mb-0">
                            Dibuat Pada:  {{$siswa->created_at->format('d F Y')}}
                            <br>
                            </p>
                            <p class="mb-0">
                            Status : Pengguna
                            </p>
                            <p class="mb-0">
                            Kebutuhan : {{$siswa->kebutuhan}}
                            </p>
                        </div>
                    </div>
                   
                    <hr>
                       <div style="display:flex; justify-content: space-between" class="naik">
                            <div style="text-align: left">
                                <p style="color: rgb(101, 110, 223);" class="mb-0">
                                    Penyedia
                                </p>
                                <p class="mb-0">
                                    Hubungan Industri
                                </p>
                                <p class="mb-0">
                                    hubinSmkn1@gmail.com
                                </p>
                                <p class="mb-0">
                                    +62 89611569578 (Admin)
                                </p>
                                <p class="mb-0">
                                    www.hubin.smkn1cibinong.sch.id
                                </p>
                            </div>

                            <div style="text-align: right">
                                <p style="color: rgb(101, 110, 223);" class="mb-0">
                                    Pengguna
                                </p>
                                <p class="mb-0">
                                    {{ $siswa->nama}}
                                </p>
                                <p class="mb-0">
                                    {{$siswa->email}}
                                </p>
                                <p class="mb-0">
                                   Jurusan, {{$siswa->jurusan}} '{{$siswa->angkatan}}
                                </p>
                            </div>
                        </div>
                        <table class='table table-bordered naik-table'>
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">#</th>
                                <th width="50%">input data</th>
                                <th width="50%">Output data</th>
                            </tr>
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
                                    <td style="color:orange;">{{$siswa->kebutuhan}}
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
                                    <td style="color:orange;">{{$siswa->no_telepon}}
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">12</th>
                                    <td>Alamat Email</td>
                                    <td style="color:orange;">{{$siswa->email}}
                                    </td>
                                    </tr>
                                    <tr>
                                    <th scope="row">13</th>
                                    <td>Karya</td>
                                    <td style="color:orange;">
                                        <img id="myImg" src="{{ public_path('/data_karya/'.$siswa->karya) }}" alt="Karya Siswa" height="50">
                                    </td>
                                    </tr>
                            </tbody>
                        </table>

                   
 
</body>
</html>