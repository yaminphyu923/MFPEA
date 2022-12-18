<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\M010101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M010101Finance extends Model
{
    use HasFactory;

    protected $table = "m010101_finances";
    protected $fillable = [
        "m010101_id",
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

    public function m010101()
    {
        return $this->belongsTo(M010101::class,'m010101_id','id');
    }
}
