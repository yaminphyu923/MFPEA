<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che08;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che08Finance extends Model
{
    use HasFactory;

    protected $table = "f04che08_finances";
    protected $fillable = [
        "f04che08_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che08()
    {
        return $this->belongsTo(F04che08::class,'f04che08_id','id');
    }
}
