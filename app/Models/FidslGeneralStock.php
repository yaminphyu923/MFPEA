<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FidslGeneralStock extends Model
{
    use HasFactory;
    protected $table = "fidsl_general_stocks";
    protected $fillable = [
        "product_name",
        "date",
        "total_stock",
        "remark",
    ];
}
