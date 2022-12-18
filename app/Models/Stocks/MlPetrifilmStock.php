<?php

namespace App\Models\Stocks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlPetrifilmStock extends Model
{
    use HasFactory;

    protected $table="ml_petrifilm_stocks";
    protected $fillable = [
        "item_name",
        "description",
        "date",
        "stock",
        "new",
        "usage",
        "balance",
        "total_stock",
        "remark"
    ];
}
