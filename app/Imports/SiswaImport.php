<?php
 
namespace App\Imports;
 
use App\resume;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new resume([
            'nama' => $row[1],
            'nisn' => $row[2], 
            'jenis_kelamin' => $row[3],
            'angkatan' => $row[4],
            'alamat' => $row[5], 
            'no_telepon' => $row[6], 
            'kota_kabupaten' => $row[7],
            'keahlian' => $row[8], 
            'kebutuhan' => $row[9],
            'karya' => $row[10], 
            'kepribadian' => $row[11],
            'jurusan' => $row[12], 
            'foto' => $row[13],
            'email' => $row[14]
        ]);
    }
}