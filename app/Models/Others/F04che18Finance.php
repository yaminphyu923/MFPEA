<?php

namespace App\Models\Others;

use App\Models\Others\F04che18;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che18Finance extends Model
{
    use HasFactory;

    protected $table = "f04che18_finances";
    protected $fillable = [
        "f04che18_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che18()
    {
        return $this->belongsTo(F04che18::class,'f04che18_id','id');
    }
}
