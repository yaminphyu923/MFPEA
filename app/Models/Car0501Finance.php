<?php

namespace App\Models;

use App\Models\Car0501;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car0501Finance extends Model
{
    use HasFactory;

    protected $table = "car0501_finances";
    protected $fillable =
    [
        "car0501_id",
        "remark",
        "receive_voucher",
        "amount",
        "date",
        "test_type",
        "receive_voucher_2",
        "amount_2",
        "date_2",
        "test_type_2",
        "remark_2",
        "status",
    ];

    public function car0501()
    {
        return $this->belongsTo(Car0501::class,'car0501_id','id');
    }
}
