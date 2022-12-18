<?php

namespace App\Models;

use App\Models\StockGlassWare;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseUsedGlassWare extends Model
{
    use HasFactory;
    protected $table = "purchase_used_glass_wares";
    protected $fillable =[
        "stock_glass_ware_id",
        "purchase_stock",
        "purchase_date",
        "used_stock",
        "used_date"
    ];

    public function glassWare()
    {
        return $this->belongsTo(StockGlassWare::class,'stock_glass_ware_id','id');
    }
}
