<?php

namespace App\Models\Stocks;

use App\Models\Stocks\MlGeneralStock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseUsedMlGeneralStock extends Model
{
    use HasFactory;

    protected $table="purchase_used_ml_general_stocks";
    protected $fillable = [
        "ml_general_stock_id",
        "purchase_stock",
        "purchase_date",
        "used_stock",
        "used_date",
    ];

    public function mlGeneralStock()
    {
        return $this->belongsTo(MlGeneralStock::class,'ml_general_stock_id','id');
    }
}
