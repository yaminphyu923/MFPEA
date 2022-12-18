<?php

namespace App\Models\WaterTests;

use App\Models\WaterTests\Wtfcar0502;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wtfcar0502Finance extends Model
{
    use HasFactory;

    protected $table = "wtfcar0502_finances";
    protected $fillable = [
        "wtfcar0502_id",
        "voucher",
        "amount",
        "date",
        "remark",
        "test_type",
        "voucher_2",
        "amount_2",
        "date_2",
        "remark_2",
        "test_type_2",
        "status"
    ];

    public function wtfcar0502()
    {
        return $this->belongsTo(Wtfcar0502::class,'wtfcar0502_id','id');
    }
}
