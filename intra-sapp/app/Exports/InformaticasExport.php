<?php

namespace App\Exports;

use App\Models\Informatica;
use Maatwebsite\Excel\Concerns\FromCollection;

class InformaticasExport implements FromCollection
{
    /**s
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Informatica::all();
    }
}
