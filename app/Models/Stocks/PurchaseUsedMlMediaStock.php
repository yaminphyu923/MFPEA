<?php

namespace App\Models\Stocks;

use App\Models\Stocks\MlMediaStock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseUsedMlMediaStock extends Model
{
    use HasFactory;

    protected $table="purchase_used_ml_media_stocks";
    protected $fillable = [
        "ml_media_stock_id",
        "purchase_stock",
        "purchase_date",
        "used_stock",
        "used_date",
    ];

    public function mlMediaStock()
    {
        return $this->belongsTo(MlMediaStock::class,'ml_media_stock_id','id');
    }
}
