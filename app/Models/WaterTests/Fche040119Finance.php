<?php

namespace App\Models\WaterTests;

use App\Models\WaterTests\Fche040119;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040119Finance extends Model
{
    use HasFactory;

    protected $table = "fche040119_finances";
    protected $fillable = [
        "fche040119_id",
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

    public function fche040119()
    {
        return $this->belongsTo(Fche040119::class,'fche040119_id','id');
    }
}
