@extends('layouts.navbar2')

@section('title')
        Buat Resume
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid kotak-atas">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-12 mt-5 ">
            <nav aria-label="breadcrumb" data-aos="fade" data-aos-easing="ease" data-aos-delay="500">
                <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{ url('/page_siswa') }}" style="color:#36CFCF;">Beranda</a></li>
                <li class="breadcrumb-item ">Buat Resume</li>
                </ol>
            </nav>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12 text-center">
        <h3 class="mb-4" data-aos="fade" data-aos-easing="ease" data-aos-delay="500">
            Buat Yang Terbaik Untuk Karir Anda 📑
        </h3>
        </div>
        </div>
    </div>
</div>
        <div class="container" style="margin-top: 15vh;">

                <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="box-content"  data-aos="fade" data-aos-easing="ease" data-aos-delay="500">
                            <div class="col-lg-12">
                                          {{-- menampilkan error validasi --}}
                                          @if (count($errors) > 0)
                                          <div class="alert alert-danger">
                                              <ul>
                                                  @foreach ($errors->all() as $error)
                                                      <li>{{ $error }}</li>
                                                  @endforeach
                                              </ul>
                                          </div>
                                          @endif
                                              
                                      <form action="{{ url('/upload_resume') }}" method="post" enctype="multipart/form-data">
  
                                          @csrf
                                          
                                           
                                          <div class="form-group">
                                              <label for="foto">Foto Siswa</label>
                                              <input type="file" class="form-control-file" id="foto" name="foto" required value="{{ old('foto') }}">
                                              <small class="text-danger form-text small_text mt-2">Gunakan Foto yang sopan,rapih,dan bagus.Karena akan dilihat oleh pihak perusahaan pada tampilan depan !</small>
                                          </div>
  
                                          
                                          <div class="form-groub">
                                              <label for="nama"> {{ __('Nama Lengkap') }}</label>
                                              <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" autofocus required value="{{ old('nama') }}">
                                              @error('nama')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                      
                                          </div>
                                           
                                          <div class="form-groub">
                                              <label for="nisn"> {{ __('Nisn') }}</label>
                                              <input id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" autofocus required value="{{ old('nisn') }}">
                                              @error('nisn')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                      
                                          </div>
  
                                          
                                          <div class="form-groub">
  
                                              <label> {{ __('Ringkasan Kepribadian Anda') }}</label>
  
                                                  <small class="form-text small_text mb-4 text-muted">
                                                      Lampirkan gambaran kepribadian yang seperti apakah anda, dengan 
                                                      singkat ,jelas, dan padat. Untuk menjaga privasi anda.
                                                  </small>
  
                                                  <textarea rows="10" id="kepribadian" class="form-control text_area @error('kepribadian') is-invalid @enderror" name="kepribadian" required>{{ old('kepribadian') }}</textarea>
                                                  
                                                  @error('kepribadian')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                              
                                          </div>
  
                                           
                                          <label> {{ __('Jenis Kelamin') }}</label>
                                              <div class="form-check">
                                                  <label class="container"><span class="text__radio">Laki - laki</span>
                                                      <input type="radio" id="laki" name="jenis_kelamin" class="form-check-input form-radio" value="laki-laki" required <?=(old('jenis_kelamin') == 'laki-laki' ? 'checked' : null)?>>
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label class="container"><span class="text__radio">Perempuan</span>
                                                      <input type="radio" id="perempuan" name="jenis_kelamin" class="form-check-input form-radio" value="perempuan" required <?=(old('jenis_kelamin') == 'perempuan' ? 'checked' : null)?>>
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  @error('roles')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror
                                              </div>
  
                                           
                                          <div class="form-groub">
  
                                              <label> {{ __('Alamat') }}</label>
  
                                                  <textarea rows="10" id="alamat" class="form-control text_area @error('alamat') is-invalid @enderror" name="alamat" required >{{ old('alamat') }}</textarea>
                                                  
                                                  @error('alamat')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                              
                                          </div>
  
                                            
                                          <div class="form-groub">
                                              <label for="kota"> {{ __('Kota / Kabupaten') }}</label>
                                              <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" autofocus required value="{{ old('kota') }}">
                                              @error('kota')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                      
                                          </div>
  
                                             
                                           <div class="form-groub">
                                              <label for="jurusan"> {{ __('Jurusan') }}</label>
                                              <input id="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" autofocus required value="{{ old('jurusan') }}">
                                              @error('jurusan')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                      
                                          </div>
  
                                           
                                          <div class="form-group">
                                              <label for="angkatan">{{ __('Angkatan')}}</label>
                                              <select multiple class="form-control" id="angkatan" required name="angkatan">
                                                  <option value="1"  {{ old('angkatan') == 1 ? 'selected' : '' }}>1</option>
                                                  <option value="2"  {{ old('angkatan') == 2 ? 'selected' : '' }}>2</option>
                                                  <option value="3" {{ old('angkatan') == 3 ? 'selected' : '' }}>3</option>
                                                  <option value="4" {{ old('angkatan') == 4 ? 'selected' : '' }}>4</option>
                                                  <option value="5" {{ old('angkatan') == 5 ? 'selected' : '' }}>5</option>
                                                  <option value="6" {{ old('angkatan') == 6 ? 'selected' : '' }}>6</option>
                                                  <option value="7" {{ old('angkatan') == 7 ? 'selected' : '' }}>7</option>
                                                  <option value="8" {{ old('angkatan') == 8 ? 'selected' : '' }}>8</option>
                                                  <option value="9" {{ old('angkatan') == 9 ? 'selected' : '' }}>9</option>
                                                  <option value="10" {{ old('angkatan') == 10 ? 'selected' : '' }}>10</option>
                                                  <option value="11" {{ old('angkatan') == 11 ? 'selected' : '' }}>11</option>
                                                  <option value="12" {{ old('angkatan') == 12 ? 'selected' : '' }}>12</option>
                                                  <option value="13" {{ old('angkatan') == 13 ? 'selected' : '' }}>13</option>
                                                  <option value="14" {{ old('angkatan') == 14 ? 'selected' : '' }}>14</option>
                                                  <option value="15" {{ old('angkatan') == 15 ? 'selected' : '' }}>15</option>
                                                  <option value="16" {{ old('angkatan') == 16 ? 'selected' : '' }}>16</option>
                                                  <option value="17" {{ old('angkatan') == 17 ? 'selected' : '' }}>17</option>
                                                  <option value="18" {{ old('angkatan') == 18 ? 'selected' : '' }}>18</option>
                                                  <option value="19" {{ old('angkatan') == 19 ? 'selected' : '' }}>19</option>
                                                  <option value="20" {{ old('angkatan') == 20 ? 'selected' : '' }}>20</option>
                                                  <option value="21" {{ old('angkatan') == 21 ? 'selected' : '' }}>21</option>
                                                  <option value="22" {{ old('angkatan') == 22 ? 'selected' : '' }}>22</option>
                                              </select>
                                            </div>
                                          
  
                                            
                                           <div class="form-groub">
                                              <label for="telepon"> {{ __('No Telepon') }}</label>
                                              <input id="telepon" type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon" required value="{{ old('telepon') }}">
                                              @error('telepon')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
  
                                          <div class="form-groub">
                                              <label for="email"> {{ __('Alamat Email') }}</label>
                                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ old('email') }}">
                                              @error('email')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                              @enderror
                                          </div>
  
                                          
                                            
                                           <div class="form-groub">
  
                                              <label> {{ __('Keahlian') }}</label>
  
                                                   <small class="form-text small_text mb-4 text-muted">
                                                      Lampirkan keahlian apa saja yang kamu miliki untuk meyakinkan pihak perusahaan 
                                                      tentang dirimu.
                                                  </small>
  
                                                  <textarea rows="10" id="keahlian" class="form-control text_area @error('keahlian') is-invalid @enderror" name="keahlian" required>{{ old('keahlian') }}</textarea>
                                                  
                                                  @error('keahlian')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                              
                                          </div>
  
                                           
                                          <label> {{ __('Kebutuhan') }}</label>
                                              <div class="form-check">
                                                  <label class="container"><span class="text__radio">Magang</span>
                                                      <input type="radio" id="magang" name="kebutuhan" class="form-check-input form-radio" value="Magang" required <?=(old('kebutuhan') == 'Magang' ? 'checked' : null)?>>
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label class="container"><span class="text__radio">Bekerja</span>
                                                      <input type="radio" id="bekerja" name="kebutuhan" class="form-check-input form-radio" value="Bekerja" required <?=(old('kebutuhan') == 'Bekerja' ? 'checked' : null)?>>
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  @error('Kebutuhan')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror
                                              </div>
  
                                               
                                              <div class="form-group">
                                                <label for="karya">Kirim Karya Terbaik</label>
                                                <input type="file" class="form-control-file" id="karya" name="karya" multiple required value="{{ old('karya') }}"> 
                                              </div>
  
                                              <button class="btn btn-resume font-weight-normal text-uppercase mb-5 mt-5" type="submit">
                                                  Buat dan Tinjau Resume
                                              </button>
  
                                              
                                          
                                      </form>

                                    </div>
                            </div>
                        </div>
                </div>
        </div>
        
         <!-- Modal -->
         <div class="modal fade" 
         id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
             <div class="modal-dialog">
             <div class="modal-content text-center">
                 <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Ketentuan</h5>
                 </div>
                 <div class="modal-body text-left">
                     <p class="mb-1">
                         1. Setiap siswa diwajibkan membuat resume hanya 1x saja ,kami juga sudah membuat validasi pada nisn anda
                     <p class="mb-1">
                         2. Data yang sudah anda kirim nantinya akan diterima pada halaman perusahaan.
                     </p>
                     <p class="mb-1">
                         3. Data pada form input semuanya wajib untuk diisi
                     </p>
                     <p class="mb-1">
                         4. Anda baru bisa mendownload file pdf, ketika anda sudah membuat resume anda.
                     </p>
                 </div>
                 <div class="modal-footer">
                 <button type="button" class="btn btn-success" data-dismiss="modal">Ya,Saya Mengerti</button>
                 </div>
             </div>
             </div>
         </div>
    @include('includes.footer')
@endsection