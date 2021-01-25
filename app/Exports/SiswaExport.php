<?php
 
namespace App\Exports;
 
use App\resume;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class SiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return resume::all();
    }
}