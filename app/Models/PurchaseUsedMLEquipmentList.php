<?php

namespace App\Models;

use App\Models\StockMLEquipmentList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseUsedMLEquipmentList extends Model
{
    use HasFactory;

    protected $table = "purchase_used_m_l_equipment_lists";
    protected $fillable =[
        "ml_equipment_list_id",
        "purchase_stock",
        "purchase_date",
        "used_stock",
        "used_date"
    ];

    public function stockMLEquipmentList()
    {
        return $this->belongsTo(StockMLEquipmentList::class,'ml_equipment_list_id','id');
    }
}
