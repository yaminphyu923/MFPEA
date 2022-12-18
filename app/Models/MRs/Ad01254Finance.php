<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad01254;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01254Finance extends Model
{
    use HasFactory;

    protected $table = "ad01254_finances";
    protected $fillable = [
        "ad01254_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad01254()
    {
        return $this->belongsTo(Ad01254::class,'ad01254_id','id');
    }
}
