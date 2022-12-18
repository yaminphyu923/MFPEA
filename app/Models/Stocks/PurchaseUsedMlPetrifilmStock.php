<?php

namespace App\Models\Stocks;

use App\Models\Stocks\MlPetrifilmStock;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseUsedMlPetrifilmStock extends Model
{
    use HasFactory;

    protected $table="purchase_used_ml_petrifilm_stocks";
    protected $fillable = [
        "ml_petrifilm_stock_id",
        "purchase_stock",
        "purchase_date",
        "used_stock",
        "used_date",
    ];

    public function mlPetrifilmStock()
    {
        return $this->belongsTo(MlPetrifilmStock::class,'ml_petrifilm_stock_id','id');
    }
}
