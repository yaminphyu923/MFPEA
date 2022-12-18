<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad00396;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00396Finance extends Model
{
    use HasFactory;

    protected $table = "ad00396_finances";
    protected $fillable = [
        "ad00396_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad00396()
    {
        return $this->belongsTo(Ad00396::class,'ad00396_id','id');
    }
}
