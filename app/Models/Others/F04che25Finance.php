<?php

namespace App\Models\Others;

use App\Models\Others\F04che25;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che25Finance extends Model
{
    use HasFactory;

    protected $table = "f04che25_finances";
    protected $fillable = [
        "f04che25_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che25()
    {
        return $this->belongsTo(F04che25::class,'f04che25_id','id');
    }
}
