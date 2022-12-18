<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockChemicalList extends Model
{
    use HasFactory;

    protected $table= "stock_chemical_lists";

    protected $fillable = [
        "chemical_name",
        "description",
        "brand",
        "country",
        "serial_no",
        "package",
        "qty",
        "qty_gkgl",
        "unit",
        "formula",
        "total_stock",
        "remark",
    ];
}
