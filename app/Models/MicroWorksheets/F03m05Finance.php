<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\F03m05;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F03m05Finance extends Model
{
    use HasFactory;

    protected $table = "f03m05_finances";
    protected $fillable = [
        "f03m05_id",
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

    public function f03m05()
    {
        return $this->belongsTo(F03m05::class,'f03m05_id','id');
    }
}
