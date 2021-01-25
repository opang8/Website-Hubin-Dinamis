<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
     

    protected $fillable = [
        'lokasi',
        'jenis_pekerjaan',
        'kerja_sebagai',
        'logo',
        'nama_perusahaan',
        'link'
    ];
}
