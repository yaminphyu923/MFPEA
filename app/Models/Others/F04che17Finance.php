<?php

namespace App\Models\Others;

use App\Models\Others\F04che17;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che17Finance extends Model
{
    use HasFactory;

    protected $table = "f04che17_finances";
    protected $fillable = [
        "f04che17_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che17()
    {
        return $this->belongsTo(F04che17::class,'f04che17_id','id');
    }
}
