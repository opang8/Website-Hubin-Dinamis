<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
   
    public $table = "resume";
    
    protected $fillable = [
        'nama',
            'nisn' ,
            'jenis_kelamin',
            'angkatan',
            'alamat', 
            'no_telepon' ,
            'kota_kabupaten',
            'keahlian' ,
            'kebutuhan',
            'karya', 
            'kepribadian',
            'jurusan', 
            'foto',
            'email'

    ];
}

