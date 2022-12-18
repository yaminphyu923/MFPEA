<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\M030101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M030101Finance extends Model
{
    use HasFactory;

    protected $table = "m030101_finances";
    protected $fillable = [
        "m030101_id",
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

    public function m030101()
    {
        return $this->belongsTo(M030101::class,'m030101_id','id');
    }
}
