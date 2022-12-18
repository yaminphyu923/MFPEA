<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockMLEquipmentList extends Model
{
    use HasFactory;

    protected $table= "stock_m_l_equipment_lists";

    protected $fillable = [
        "equipment_name",
        "brand",
        "model",
        "serial_no",
        "id_no",
        "supplier",
        "purchase_donate_date",
        "installation_date",
        "location",
        "total_stock",
        "remark",
    ];
}
