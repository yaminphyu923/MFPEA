<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad01250;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01250Finance extends Model
{
    use HasFactory;

    protected $table = "ad01250_finances";
    protected $fillable = [
        "ad01250_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad01250()
    {
        return $this->belongsTo(Ad01250::class,'ad01250_id','id');
    }
}
