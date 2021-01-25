<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\SiswaImport;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use App\lowongan;
use App\resume;
use App\users;
use App\komentar;
use File;

class DashboardController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function resume()
    {
        $tanggal = date('l, d F Y');
        $total = resume::orderBy('created_at', 'desc');
        $resume = resume::orderBy('created_at', 'desc')->paginate('7');

        $per_bulan = resume::whereMonth('created_at', date('m'))->count();
        $per_hari = resume::whereDate('created_at', date('y-m-d'))->count();

        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('l, d F Y');
        $bulan = date('D F Y');


        return view('pages.admin.resume', [ 'total' => $total,'per_bulan' => $per_bulan, 'per_hari' => $per_hari,'resume'=>$resume, 'tanggal'=>$tanggal,'bulan' => $bulan,]);
        
    }

    public function loker()
    {   
        $tanggal = date('l, d F Y');
       // mengambil data dari table pegawai
       $loker = lowongan::orderBy('created_at', 'desc')->paginate('7');

    	// mengirim loker pegawai ke view index
    	return view('pages.admin.loker',['loker' => $loker ,'tanggal' => $tanggal]);
    }


    public function posting()
    {
        $tanggal = date('l, d F Y');
        return view('pages.admin.posting', ['tanggal'=>$tanggal]);
        
    }

    public function komentar()
    {  
      
        $tanggal = date('l, d F Y');
        $komentar = komentar::orderBy('created_at', 'desc')->paginate('100');

        return view('pages.admin.komentar', ['komentar'=>$komentar,'tanggal'=>$tanggal]);
        
    }
   

    public function index()
    {
        
        $siswa = DB::table('users')->where('roles', '=', 'SISWA')->get()->count();
        $perusahaan = DB::table('users')->where('roles', '=', 'PERUSAHAAN')->get()->count();
        $admin = DB::table('users')->where('roles', '=', 'ADMIN')->get()->count();


        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('l, d F Y');
        $bulan = date('D F Y');

        $users = users::orderBy('created_at', 'desc')->paginate(7);
        return view('pages.admin.dashboard', ['admin'=>  $admin,'users'=>  $users,'perusahaan'=> $perusahaan, 'siswa'=>  $siswa, 'tanggal' => $tanggal, 'bulan' => $bulan]);
    }

    public function download()
    {   
        return Excel::download(new SiswaExport, 'resume_siswa.xlsx');
    }

    

    public function upload(Request $request)
    {
        
        $tanggal = date('l, d F Y');
        	// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);
 
		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Berhasil Diimport!');
 
        return redirect()->back();
        
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
        $file = $req->file('logo');
 
		$nama_logo = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
        $upload = 'data_logo';
        
		$file->move($upload,$nama_logo);
       
        
        $siswa = lowongan::create([
            'lokasi' => $req->lokasi,
            'jenis_pekerjaan' => $req->pekerjaan,
            'kerja_sebagai' => $req->kerja_sebagai,
            'logo' => $nama_logo,
            'nama_perusahaan' => $req->nama_perusahaan,
            'link' => $req->link,
           
        ]);
         
       
        return redirect('/admin/loker_dashboard')->with('success', 'Loker Berhasil di Posting');
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
        return view('pages.admin.show_resume', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit($id)
    {
        $siswa = DB::select('select * from resume where id = ?', [$id]);
        return view('pages.admin.edit', ['siswa' => $siswa]);
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
        if($req->user()->foto){
            Storage::delete($request->user()->foto);
        }

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
            $red = redirect('/admin/resume_dashboard/')->with('success', 'Resume Berhasil di Update');
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

    $gambar = resume::where('id',$id)->first();
    File::delete('/data_karya','/data_foto','/data_logo'.$gambar->file);

    // hapus data
	resume::where('id',$id)->delete();
    return redirect()->back();

    }

}
