<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad00084;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00084Finance extends Model
{
    use HasFactory;

    protected $table = "ad00084_finances";
    protected $fillable = [
        "ad00084_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad00084()
    {
        return $this->belongsTo(Ad00084::class,'ad00084_id','id');
    }
}
