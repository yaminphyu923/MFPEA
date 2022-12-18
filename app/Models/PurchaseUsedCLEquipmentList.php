<?php

namespace App\Models;

use App\Models\StockCLEquipmentList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseUsedCLEquipmentList extends Model
{
    use HasFactory;

    protected $table = "purchase_used_c_l_equipment_lists";
    protected $fillable =[
        "cl_equipment_list_id",
        "purchase_stock",
        "purchase_date",
        "used_stock",
        "used_date"
    ];

    public function stockCLEquipmentList()
    {
        return $this->belongsTo(StockCLEquipmentList::class,'cl_equipment_list_id','id');
    }
}
