<?php

namespace App\Models\Others;

use App\Models\Others\F05;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F05Finance extends Model
{
    use HasFactory;

    protected $table = "f05_finances";
    protected $fillable = [
        "f05_id",
        "voucher",
        "amount",
        "date",
        "remark",
        "test_type",
        "voucher_2",
        "amount_2",
        "date_2",
        "remark_2",
        "test_type_2",
        "status"
    ];

    public function f05()
    {
        return $this->belongsTo(F05::class,'f05_id','id');
    }
}
