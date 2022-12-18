<?php

namespace App\Exports;

use App\Models\StockMLEquipmentList;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StockMLEquipmentListsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StockMLEquipmentList::select("equipment_name","brand","model","serial_no","id_no","supplier","purchase_donate_date","installation_date","location","total_stock","remark")->get();
    }

    public function headings(): array
    {
        return [
            'Equipment Name',
            'Brand',
            'Model',
            'Serial No',
            'ID No',
            'Supplier',
            'Date of Purchase/Donate',
            'Date of Installation Finished and First',
            'Location',
            'Total Stock',
            'Remark'
        ];
    }
}
