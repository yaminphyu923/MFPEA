<?php

namespace App\Exports;

use App\Models\StockCLEquipmentList;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StockCLEquipmentListsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StockCLEquipmentList::select("product_name","model_no","capacity","power_supply","manufacture_name","country","supplier","identification","brand","total_stock","remark")->get();
    }

    public function headings(): array
    {
        return [
            'Product Name',
            'Model No',
            'Capacity',
            'Power Supply',
            'Manufacture Name',
            'Country',
            'Supplier',
            'Identification',
            'Brand',
            'Total Stock',
            'Remark'
        ];
    }
}
