<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseUsedFidslGeneralStock extends Model
{
    use HasFactory;

    protected $table = "purchase_used_fidsl_general_stocks";
    protected $fillable =[
        "fidsl_general_stock_id",
        "purchase_stock",
        "purchase_date",
        "used_stock",
        "used_date"
    ];

    public function fidslGeneralStock()
    {
        return $this->belongsTo(FidslGeneralStock::class,'fidsl_general_stock_id','id');
    }
}
