<?php

namespace App\Models\Others;

use App\Models\Others\F04che15;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che15Finance extends Model
{
    use HasFactory;

    protected $table = "f04che15_finances";
    protected $fillable = [
        "f04che15_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che15()
    {
        return $this->belongsTo(F04che15::class,'f04che15_id','id');
    }
}
