<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lowongan;
use File;

class DashboardController3 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tanggal = date('l, d F Y');

        $loker = lowongan::where('id', $id)->first();
        return view('pages.admin.show_loker', ['loker' => $loker, 'tanggal' => $tanggal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanggal = date('l, d F Y');
        $loker = DB::select('select * from lowongans where id = ?', [$id]);
        return view('pages.admin.edit_loker', ['loker' => $loker,'tanggal' => $tanggal]);

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
            Storage::delete($req->user()->foto);
        }
        
        $logo = $req->file('logo');
 
		$nama_logo = time()."_".$logo->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
        $upload = 'data_logo';
        
		$logo->move($upload,$nama_logo);
    
    
       $siswa =  lowongan::findOrFail($id)->update([
            'logo' => $nama_logo,
            'jenis_pekerjaan' => $req->get('pekerjaan'),
            'kerja_sebagai' => $req->get('kerja_sebagai'),
            'nama_perusahaan' => $req->get('nama_perusahaan'),
            'link' => $req->get('link'),
        ]); 

       
         
         
        if($siswa){
            $red = redirect('/admin/loker_dashboard')->with('success', 'Loker Berhasil di Update');
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

    $gambar = lowongan::where('id',$id)->first();
    File::delete('/data_karya','/data_foto','/data_logo'.$gambar->file);

    // hapus data
	lowongan::where('id',$id)->delete();
    return redirect()->back();
    
    }
}
