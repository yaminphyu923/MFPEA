<?php

namespace App\Exports;

use App\Models\StockGlassWare;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StockGlassWaresExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StockGlassWare::select("items","capacity","total_stock","remark","unit","qty")->get();
    }

    public function headings(): array
    {
        return [
            'Item',
            'Capacity',
            'Total Stock',
            'Remark',
            'Unit',
            'Quantity'
        ];
    }
}
