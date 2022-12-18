<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\F03m06;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F03m06Finance extends Model
{
    use HasFactory;

    protected $table = "f03m06_finances";
    protected $fillable = [
        "f03m06_id",
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

    public function f03m06()
    {
        return $this->belongsTo(F03m06::class,'f03m06_id','id');
    }
}
