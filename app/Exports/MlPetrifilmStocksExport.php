<?php

namespace App\Exports;

use App\Models\Stocks\MlPetrifilmStock;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class MlPetrifilmStocksExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MlPetrifilmStock::select("item_name","description","date","stock","new","usage","balance","total_stock","remark")->get();
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
            'Balance',
            'Total Stock',
            'Remark',
        ];
    }
}
