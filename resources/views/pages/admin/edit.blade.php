@extends('layouts.navbar_admin')

@section('title')
        Edit Resume
@endsection

@section('content')
    
        <div class="container">
            
                <div class="row justify-content-center">
                        <div class="col-md-5">
                            @foreach ($siswa as $siswa)
                                        <form action="{{ route('action-table.update', $siswa->id) }}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        @method('PUT')
                                         
                                       
                                    
                                        <div class="form-group">
                                            <label for="foto">Foto Siswa</label>
                                            <input type="file" class="form-control-file" id="foto" name="foto" required value="{{ old('foto') }}">
                                            <small class="text-danger form-text small_text mt-2">Gunakan Foto yang sopan,rapih,dan bagus.Karena akan dilihat oleh pihak perusahaan pada tampilan depan !</small>
                                          </div>

                                        <div class="form-groub">
                                            <label for="nama"> {{ __('Nama Lengkap') }}</label>
                                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" autofocus required  value="{{ $siswa->nama }}" >
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                    
                                        </div>
                                         
                                        <div class="form-groub">
                                            <label for="nisn">{{ __('Nisn') }}</label>
                                            <input id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" autofocus required value="{{ $siswa->nisn }}">
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

                                                <textarea rows="10" id="kepribadian" class="form-control text_area @error('kepribadian') is-invalid @enderror" name="kepribadian" required value="{{ old('kepribadian') }}"  autocomplete="kepribadian">{{ $siswa->kepribadian }}</textarea>
                                                
                                                @error('kepribadian')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                        </div>

                                         
                                        <label> {{ __('Jenis Kelamin') }}</label>
                                            <div class="form-check">
                                                <label class="container"><span class="text__radio">Laki - laki</span>
                                                    <input type="radio" id="laki" name="jenis_kelamin" class="form-check-input form-radio" value="laki-laki" required {{$siswa->jenis_kelamin == 'laki-laki'? 'checked' : ''}}>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container"><span class="text__radio">Perempuan</span>
                                                    <input type="radio" id="perempuan" name="jenis_kelamin" class="form-check-input form-radio" value="perempuan" required {{$siswa->jenis_kelamin == 'perempuan'? 'checked' : ''}}>
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

                                        <textarea rows="10" id="alamat" class="form-control text_area @error('alamat') is-invalid @enderror" name="alamat" required value="{{ old('alamat') }}"  autocomplete="alamat">{{$siswa->alamat}}</textarea>
                                                
                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                        </div>

                                          
                                        <div class="form-groub">
                                            <label for="kota"> {{ __('Kota / Kabupaten') }}</label>
                                        <input id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{$siswa->kota_kabupaten}}" required>
                                            @error('kota')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                    
                                        </div>

                                           
                                         <div class="form-groub">
                                            <label for="jurusan"> {{ __('Jurusan') }}</label>
                                         <input id="jurusan" type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{$siswa->jurusan}}" required>
                                            @error('jurusan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                    
                                        </div>

                                         
                                        <div class="form-group">
                                            <label for="angkatan">{{ __('Angkatan')}}</label>
                                            <select multiple class="form-control" id="angkatan" required name="angkatan">
                                               <option value="1" @if(old('angkatan',$siswa->angkatan) == '1') selected @endif>1</option>
                                               <option value="2" @if(old('angkatan',$siswa->angkatan) == '2') selected @endif>2</option>
                                               <option value="3" @if(old('angkatan',$siswa->angkatan) == '3') selected @endif>3</option>
                                               <option value="4" @if(old('angkatan',$siswa->angkatan) == '4') selected @endif>4</option>
                                               <option value="5" @if(old('angkatan',$siswa->angkatan) == '5') selected @endif>5</option>
                                               <option value="6" @if(old('angkatan',$siswa->angkatan) == '6') selected @endif>6</option>
                                               <option value="7" @if(old('angkatan',$siswa->angkatan) == '7') selected @endif>7</option>
                                               <option value="8" @if(old('angkatan',$siswa->angkatan) == '8') selected @endif>8</option>
                                               <option value="9" @if(old('angkatan',$siswa->angkatan) == '9') selected @endif>9</option>
                                               <option value="10" @if(old('angkatan',$siswa->angkatan) == '10') selected @endif>10</option>
                                               <option value="11" @if(old('angkatan',$siswa->angkatan) == '11') selected @endif>11</option>
                                               <option value="12" @if(old('angkatan',$siswa->angkatan) == '12') selected @endif>12</option>
                                               <option value="13" @if(old('angkatan',$siswa->angkatan) == '13') selected @endif>13</option>
                                               <option value="14" @if(old('angkatan',$siswa->angkatan) == '14') selected @endif>14</option>
                                               <option value="15" @if(old('angkatan',$siswa->angkatan) == '15') selected @endif>15</option>
                                               <option value="16" @if(old('angkatan',$siswa->angkatan) == '16') selected @endif>16</option>
                                               <option value="17" @if(old('angkatan',$siswa->angkatan) == '17') selected @endif>17</option>
                                               <option value="18" @if(old('angkatan',$siswa->angkatan) == '18') selected @endif>18</option>
                                               <option value="19" @if(old('angkatan',$siswa->angkatan) == '19') selected @endif>19</option>
                                               <option value="20" @if(old('angkatan',$siswa->angkatan) == '20') selected @endif>20</option>
                                               <option value="21" @if(old('angkatan',$siswa->angkatan) == '21') selected @endif>21</option>
                                               <option value="22" @if(old('angkatan',$siswa->angkatan) == '22') selected @endif>22</option>
                                            </select>
                                          </div>
                                        

                                          
                                         <div class="form-groub">
                                            <label for="telepon"> {{ __('No Telepon') }}</label>
                                            <input id="telepon" type="number" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{$siswa->no_telepon}}" required>
                                            @error('telepon')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-groub">
                                            <label for="email"> {{ __('Alamat Email') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$siswa->email}}" required>
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

                                                <textarea rows="10" id="keahlian" class="form-control text_area @error('keahlian') is-invalid @enderror" name="keahlian" required value="{{ old('keahlian') }}"  autocomplete="keahlian">{{$siswa->keahlian}}</textarea>
                                                
                                                @error('keahlian')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            
                                        </div>

                                         
                                        <label> {{ __('Kebutuhan') }}</label>
                                            <div class="form-check">
                                                <label class="container"><span class="text__radio">Magang</span>
                                                    <input type="radio" id="magang" name="kebutuhan" class="form-check-input form-radio" value="Magang" required {{$siswa->kebutuhan == 'Magang'? 'checked' : ''}}>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container"><span class="text__radio">Bekerja</span>
                                                    <input type="radio" id="bekerja" name="kebutuhan" class="form-check-input form-radio" value="Bekerja" required {{$siswa->kebutuhan == 'Bekerja'? 'checked' : ''}}>
                                                    <span class="checkmark"></span>
                                                </label>
                                                @error('Kebutuhan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="karya">Kirim Karya</label>
                                                <input type="file" class="form-control-file" id="karya" name="karya" multiple required value="{{ old('karya') }}"> 
                                              </div>

                                            <button class="btn btn-resume font-weight-normal text-uppercase mb-5 mt-5" type="submit" style="background: #17c08b; color:white; width:100%; padding:15px;">
                                                Edit Resume
                                            </button>
                                        @endforeach
                                </form>
                        </div>
                </div>
        </div>
@endsection