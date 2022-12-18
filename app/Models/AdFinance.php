<?php

namespace App\Models;

use App\Models\Ad0101;
use App\Models\Ad0201;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdFinance extends Model
{
    use HasFactory;

    protected $table = "ad_finances";
    protected $fillable =
    [
        "aw_branch",
        "ad0101_id",
        "ad0201_id",
        "remark",
        "receive_voucher",
        "amount",
        "date",
    ];

    public function ad0101()
    {
        return $this->belongsTo(Ad0101::class,'ad0101_id','id');
    }

    public function ad0201()
    {
        return $this->belongsTo(Ad0201::class,'ad0201_id','id');
    }
}
