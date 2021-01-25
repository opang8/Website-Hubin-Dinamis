<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
   

    protected $fillable = [
        'nama',
        'jurusan',
        'angkatan',
        'pendapat'
    ];

}
