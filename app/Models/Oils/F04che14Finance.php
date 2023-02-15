<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che14;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che14Finance extends Model
{
    use HasFactory;

    protected $table = "f04che14_finances";
    protected $fillable = [
        "f04che14_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che14()
    {
        return $this->belongsTo(F04che14::class,'f04che14_id','id');
    }
}
