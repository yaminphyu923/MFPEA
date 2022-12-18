<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad01357;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01357Finance extends Model
{
    use HasFactory;

    protected $table = "ad01357_finances";
    protected $fillable = [
        "ad01357_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad01357()
    {
        return $this->belongsTo(Ad01357::class,'ad01357_id','id');
    }
}
