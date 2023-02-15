<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che12;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che12Finance extends Model
{
    use HasFactory;

    protected $table = "f04che12_finances";
    protected $fillable = [
        "f04che12_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che12()
    {
        return $this->belongsTo(F04che12::class,'f04che12_id','id');
    }
}
