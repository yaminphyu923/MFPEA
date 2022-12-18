<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockGlassWare extends Model
{
    use HasFactory;

    protected $table= "stock_glass_wares";

    protected $fillable = [
        "items",
        "capacity",
        "total_stock",
        "remark",
        "unit",
        "qty",
    ];
}
