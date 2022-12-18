<?php

namespace App\Models\WaterTests;

use App\Models\WaterTests\Fche040117;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040117Finance extends Model
{
    use HasFactory;

    protected $table = "fche040117_finances";
    protected $fillable = [
        "fche040117_id",
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

    public function fche040117()
    {
        return $this->belongsTo(Fche040117::class,'fche040117_id','id');
    }
}
