<?php

namespace App\Exports;

use App\Models\FidslGeneralStock;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class FidslGeneralStocksExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FidslGeneralStock::select("product_name","date","total_stock","remark")->get();
    }

    public function headings(): array
    {
        return [
            'Product Name',
            'Date',
            'Total Stock',
            'Remark',
        ];
    }
}
