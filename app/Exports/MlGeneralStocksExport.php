<?php

namespace App\Exports;

use App\Models\Stocks\MlGeneralStock;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MlGeneralStocksExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MlGeneralStock::select("item_name","description","date","stock","new","usage","total_stock","remark")->get();
    }

    public function headings(): array
    {
        return [
            'Item Name',
            'Description',
            'Date',
            'Stock',
            'New',
            'Usage/Damage',
            'Total Stock',
            'Remark',
        ];
    }
}
