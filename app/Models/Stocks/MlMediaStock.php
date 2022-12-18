<?php

namespace App\Models\Stocks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlMediaStock extends Model
{
    use HasFactory;

    protected $table="ml_media_stocks";
    protected $fillable = [
        "item_name",
        "description",
        "quantity",
        "date",
        "balance",
        "balance_g",
        "balance_ml",
        "balance_bot",
        "used",
        "new_bottle",
        "total_stock",
        "remark"
    ];
}
