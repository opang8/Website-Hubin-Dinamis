<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lowongan;
use App\tips;
use App\komentar;


class homeController extends Controller
{
    public function home(Request $request)
    {
        return view('pages.user');
    }
    
    public function tips_trik(Request $request)
    {
        $tips = Db::table('tips')->simplePaginate(4);
        return view('pages.tips_trik', ['tips'=>$tips]);
    }

    public function store(Request $req)
    {   

        $vstr = new komentar();
    
        $vstr->nama = $req["nama"];
        $vstr->jurusan = $req["jurusan"];
        $vstr->angkatan = $req["angkatan"];
        $vstr->pendapat = $req["pendapat"];
        
        $vstr->save(); 

        return view('pages.komentar_terkirim');

    }

    public function lowongan_kerja(Request $req){

        $loker = DB::table('lowongans')->get();
      
        return view ('pages.lowongan_kerja', ['loker'=>$loker]);
    }

    public function index(Request $request)
    {   
        
        $tips = DB::table('tips')->whereIn('id', [6,7,8,9])->latest()->get();
       
        return view('pages.home', ['tips'=>$tips]);
    }

    public function redirect(Request $request)
    {
        return view('pages.redirect');
    }
    public function email(){
        return view('email.resume-success');
    }

    public function show($id)
    {   
        $tips = tips::all()->random(3);
    
        $item = tips::where('id', $id)->first();
        return view('pages.view_tips_trik', ['item'=>$item, 'tips'=>$tips]);
    }

}
