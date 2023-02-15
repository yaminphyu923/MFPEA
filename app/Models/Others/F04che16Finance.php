<?php

namespace App\Models\Others;

use App\Models\Others\F04che16;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che16Finance extends Model
{
    use HasFactory;

    protected $table = "f04che16_finances";
    protected $fillable = [
        "f04che16_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che16()
    {
        return $this->belongsTo(F04che16::class,'f04che16_id','id');
    }
}
