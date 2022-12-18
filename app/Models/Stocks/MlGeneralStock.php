<?php

namespace App\Models\Stocks;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MlGeneralStock extends Model
{
    use HasFactory;

    protected $table="ml_general_stocks";
    protected $fillable = [
        "item_name",
        "description",
        "date",
        "stock",
        "new",
        "usage",
        "total_stock",
        "remark"
    ];
}
