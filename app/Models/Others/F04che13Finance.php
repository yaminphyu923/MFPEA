<?php

namespace App\Models\Others;

use App\Models\Others\F04che13;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che13Finance extends Model
{
    use HasFactory;

    protected $table = "f04che13_finances";
    protected $fillable = [
        "f04che13_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che13()
    {
        return $this->belongsTo(F04che13::class,'f04che13_id','id');
    }
}
