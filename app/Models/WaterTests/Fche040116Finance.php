<?php

namespace App\Models\WaterTests;

use App\Models\WaterTests\Fche040116;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040116Finance extends Model
{
    use HasFactory;

    protected $table = "fche040116_finances";
    protected $fillable = [
        "fche040116_id",
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

    public function fche040116()
    {
        return $this->belongsTo(Fche040116::class,'fche040116_id','id');
    }
}
