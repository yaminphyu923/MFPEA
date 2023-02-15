<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che11;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che11Finance extends Model
{
    use HasFactory;

    protected $table = "f04che11_finances";
    protected $fillable = [
        "f04che11_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che11()
    {
        return $this->belongsTo(F04che11::class,'f04che11_id','id');
    }
}
