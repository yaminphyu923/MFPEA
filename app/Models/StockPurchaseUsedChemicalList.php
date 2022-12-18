<?php

namespace App\Models;

use App\Models\StockChemicalList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockPurchaseUsedChemicalList extends Model
{
    use HasFactory;
    protected $table = "stock_purchase_used_chemical_lists";
    protected $fillable =[
        "stock_chemical_list_id",
        "purchase_stock",
        "purchase_date",
        "used_stock",
        "used_date"
    ];

    public function stockChemicalList()
    {
        return $this->belongsTo(StockChemicalList::class,'stock_chemical_list_id','id');
    }
}
