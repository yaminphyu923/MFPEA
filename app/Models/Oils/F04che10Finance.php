<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che10;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che10Finance extends Model
{
    use HasFactory;

    protected $table = "f04che10_finances";
    protected $fillable = [
        "f04che10_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che10()
    {
        return $this->belongsTo(F04che10::class,'f04che10_id','id');
    }
}
