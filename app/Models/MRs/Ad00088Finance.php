<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad00088;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00088Finance extends Model
{
    use HasFactory;

    protected $table = "ad00088_finances";
    protected $fillable = [
        "ad00088_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad00088()
    {
        return $this->belongsTo(Ad00088::class,'ad00088_id','id');
    }
}
