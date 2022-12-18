<?php

namespace App\Exports;

use App\Models\Stocks\MlMediaStock;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MlMediaStocksExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MlMediaStock::select("item_name","description","quantity","date","balance","balance_g","balance_ml","balance_bot","used","new_bottle","total_stock","remark")->get();
    }

    public function headings(): array
    {
        return [
            'Item Name',
            'Description',
            'Quantity',
            'Date',
            'Balance',
            'Balance(g)',
            'Balance(ml)',
            'Balance(bot)',
            'Used',
            'New Bottle',
            'Total Stock',
            'Remark',
        ];
    }
}
