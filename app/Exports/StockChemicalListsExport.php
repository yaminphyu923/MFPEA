<?php

namespace App\Exports;

use App\Models\StockChemicalList;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class StockChemicalListsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StockChemicalList::select("chemical_name","description","brand","country","serial_no","package","qty","qty_gkgl","unit","formula","total_stock","remark")->get();
    }

    public function headings(): array
    {
        return [
            'Chemical Name',
            'Description',
            'Brand',
            'Country',
            'Serial No',
            'Package',
            'Quantity',
            'Quantity(g/kg/l)',
            'Unit',
            'Formula',
            'Total Stock',
            'Remark',
        ];
    }
}
