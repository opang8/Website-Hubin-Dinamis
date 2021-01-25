<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\komentar;

class KomentarController extends Controller
{
    public function delete($id) {
        

        $delete = komentar::where('id',$id)->first();

        
    }
}
