<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lowongan;
use App\tips;
use Session;
use File;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tips = tips::latest()->get();

        $tanggal = date('l, d F Y');
        return view('pages.admin.tips', ['tanggal'=>$tanggal,'tips'=>$tips]);
        
    }

    
    public function posting()
    {   
      

        $tanggal = date('l, d F Y');
        return view('pages.admin.posting_tips', ['tanggal'=>$tanggal]);
        
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

        $gambar = $request->file('gambar');
 
		$nama_gambar = time()."_".$gambar->getClientOriginalName();
 
        $upload = 'data_gambar';
        
		$gambar->move($upload,$nama_gambar);
        
        $blog = tips::create(['judul' => $request->judul, 'gambar' => $nama_gambar,'text' => $request ->text]);

        Session::flash('success','Konten berhasil di Posting');

        return redirect('admin/tips_dashboard');
        
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
        $item = tips::where('id', $id)->first();
        return view('pages.admin.show_tips', ['tanggal'=>$tanggal, 'item'=>$item]);
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
        $tips = DB::select('select * from tips where id = ?', [$id]);

        Session::flash('success', 'Konten berhasil di update!');
        
        return view('pages.admin.edit_tips', ['tips'=>$tips, 'tanggal'=>$tanggal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $gambar = $request->file('gambar');
 
		$nama_gambar = time()."_".$gambar->getClientOriginalName();
 
        $upload = 'data_gambar';
        
        $gambar->move($upload,$nama_gambar);
        
        $siswa =  tips::findOrFail($id)->update([
            'gambar' => $nama_gambar,
            'judul' => $request->get('judul'),
            'text' => $request->get('text'),
        ]); 


        if($siswa){
            $red = redirect('/admin/tips_dashboard/')->with('success', 'Konten Berhasil di Update');
        } else {
            $red = redirect('admin/edit')->with('danger', 'update data gagal, Silahkan Coba Lagi');
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
        $gambar = tips::where('id',$id)->first();
        // hapus data
        tips::where('id',$id)->delete();
        return redirect()->back();
    }
}
