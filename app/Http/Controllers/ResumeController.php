<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use App\resume;
use Storage;
use PDF;
use App\komentar;

set_time_limit(400);

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.resume');
    }
    public function sukses(Request $request)
    {
        return view('pages.sukses');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.resume');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cetak_pdf($id){

       
        $siswa = resume::where('id', $id)->first();
        
        $pdf = PDF::loadview('pages.pdf',['siswa'=>$siswa]);

	    return $pdf->download('resume.pdf');

    }
    public function store(Request $req)
    {      
        $messages = [
            'required' => ':attribute wajib diisi !!',
            'min' => ':attribute harus diisi minimal :min karakter !!',
            'max' => ':attribute harus diisi maksimal :max karakter !!',
            'unique' => ':attribute sudah pernah digunakan !!'
        ];

        $this->validate($req,[
            'foto' => 'required',
            'nama' => 'required|min:3',
            'kepribadian' => 'required',
            'jenis_kelamin' => 'required',
            'angkatan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required|numeric',
            'kota' => 'required',
            'keahlian' => 'required',
            'kebutuhan' => 'required',
            'nisn' => 'required|unique:resume',
            'jurusan' => 'required',
            'karya' => 'required',
            'email' => 'required|email|unique:resume'
        ],$messages);

         // menyimpan data file yang diupload ke variabel $file
		$file = $req->file('foto');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        
        $file->move($tujuan_upload,$nama_file);
        
        $karya = $req->file('karya');
 
		$nama_karya = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
        $upload = 'data_karya';
        
		$karya->move($upload,$nama_karya);
       
        // $siswa = new resume();
    
        // $siswa->nama = $req["nama"];
        // $siswa->kepribadian = $req["kepribadian"];
        // $siswa->jenis_kelamin = $req["jenis_kelamin"];
        // $siswa->angkatan = $req["angkatan"];
        // $siswa->alamat = $req["alamat"];
        // $siswa->no_telepon = $req["no_telepon"];
        // $siswa->kota_kabupaten = $req["kota"];
        // $siswa->no_telepon = $req["no_telepon"];
        // $siswa->kota_kabupaten = $req["kota"];
    
        // $siswa->save();

        $siswa = resume::create([

			'foto' => $nama_file,
            'nama' => $req->nama,
            'kepribadian' => $req->kepribadian,
            'jenis_kelamin' => $req->jenis_kelamin,
            'angkatan' => $req->angkatan,
            'alamat' => $req->alamat,
            'no_telepon' => $req->telepon,
            'kota_kabupaten' => $req->kota,
            'keahlian' => $req->keahlian,
            'kebutuhan' => $req->kebutuhan,
            'nisn' => $req->nisn,
            'jurusan' => $req->jurusan,
            'karya' => $nama_karya,
            'email' => $req->email,
            
            
		]);
        
       $siswa->id;

        $email = $req->email;

        $data = array('foto' => $nama_file,
        'id' => $siswa,
        'nama' => $req->nama,
        'kepribadian' => $req->kepribadian,
        'jenis_kelamin' => $req->jenis_kelamin,
        'angkatan' => $req->angkatan,
        'alamat' => $req->alamat,
        'no_telepon' => $req->telepon,
        'kota_kabupaten' => $req->kota,
        'keahlian' => $req->keahlian,
        'kebutuhan' => $req->kebutuhan,
        'nisn' => $req->nisn,
        'jurusan' => $req->jurusan,
        'karya' => $nama_karya,
        'email' => $req->email);
      
        
          Mail::send('email/resume-success', $data ,function($mail) use($email)
          {
          $mail->to($email, 'no-reply')
            ->subject("Resume Online");
          $mail->from('azahrilevs1@gmail.com','HUBUNGAN INDUSTRI');
           });
      
        Session::flash('success','Resume Berhasil di Buat, Silahkan Check Kembali, dan Kirim!');
        
        return redirect('/resume/view/'.$siswa->id);
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = resume::where('id', $id)->first();
        return view('pages.show_resume', compact('siswa'));
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $siswa = DB::select('select * from resume where id = ?', [$id]);
        return view('pages.edit', ['siswa' => $siswa]);

    

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
       

        
       // menyimpan data file yang diupload ke variabel $file
		$file = $req->file('foto');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        
        $file->move($tujuan_upload,$nama_file);
        
        $karya = $req->file('karya');
 
		$nama_karya = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
        $upload = 'data_karya';
        
		$karya->move($upload,$nama_karya);
       
        
       $siswa =  resume::findOrFail($id)->update([
            'foto' => $nama_file,
            'nama' => $req->get('nama'),
            'nisn' => $req->get('nisn'),
            'kepribadian' => $req->get('kepribadian'),
            'jenis_kelamin' => $req->get('jenis_kelamin'),
            'alamat' => $req->get('alamat'),
            'kota_kabupaten' => $req->get('kota'),
            'jurusan' => $req->get('jurusan'),
            'angkatan' => $req->get('angkatan'),
            'no_telepon' => $req->get('telepon'),
            'email' => $req->get('email'),
            'keahlian' => $req->get('keahlian'),
            'kebutuhan' => $req->get('kebutuhan'),
            'karya' => $nama_karya
        ]); 

       
         
         
        if($siswa){
            $red = redirect('/resume/view/'. $id)->with('success', 'Resume Berhasil di Update');
        } else {
            $red = redirect('posts/edit')->with('danger', 'update data gagal, Silahkan Coba Lagi');
        }

        return $red;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = komentar::where('id',$id)->first();
        // hapus data
        komentar::where('id',$id)->delete();
        return redirect()->back();
    }
}
