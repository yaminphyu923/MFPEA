<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\M040101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M040101Finance extends Model
{
    use HasFactory;

    protected $table = "m040101_finances";
    protected $fillable = [
        "m040101_id",
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

    public function m040101()
    {
        return $this->belongsTo(M040101::class,'m040101_id','id');
    }
}
