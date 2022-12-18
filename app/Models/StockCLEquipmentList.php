<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockCLEquipmentList extends Model
{
    use HasFactory;

    protected $table= "stock_c_l_equipment_lists";

    protected $fillable = [
        "product_name",
        "model_no",
        "capacity",
        "power_supply",
        "manufacture_name",
        "country",
        "supplier",
        "identification",
        "brand",
        "total_stock",
        "remark",
    ];
}
