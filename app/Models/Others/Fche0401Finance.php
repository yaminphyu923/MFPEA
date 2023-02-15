<?php

namespace App\Models\Others;

use App\Models\Others\Fche0401;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche0401Finance extends Model
{
    use HasFactory;

    protected $table = "fche0401_finances";
    protected $fillable = [
        "fche0401_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche0401()
    {
        return $this->belongsTo(Fche0401::class,'fche0401_id','id');
    }
}
