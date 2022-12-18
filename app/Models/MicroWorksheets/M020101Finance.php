<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\M020101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M020101Finance extends Model
{
    use HasFactory;

    protected $table = "m020101_finances";
    protected $fillable = [
        "m020101_id",
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

    public function m020101()
    {
        return $this->belongsTo(M020101::class,'m020101_id','id');
    }
}
