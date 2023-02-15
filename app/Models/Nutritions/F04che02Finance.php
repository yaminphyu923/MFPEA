<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\F04che02;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che02Finance extends Model
{
    use HasFactory;

    protected $table = "f04che02_finances";
    protected $fillable = [
        "f04che02_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che02()
    {
        return $this->belongsTo(F04che02::class,'f04che02_id','id');
    }
}
