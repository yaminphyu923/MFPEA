<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che07;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che07Finance extends Model
{
    use HasFactory;

    protected $table = "f04che07_finances";
    protected $fillable = [
        "f04che07_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che07()
    {
        return $this->belongsTo(F04che07::class,'f04che07_id','id');
    }
}
