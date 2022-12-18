<?php

namespace App\Models\Oils;

use App\Models\Oils\Oilfcar0502;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Oilfcar0502Finance extends Model
{
    use HasFactory;

    protected $table = "oilfcar0502_finances";
    protected $fillable = [
        "oilfcar0502_id",
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

    public function oilfcar0502()
    {
        return $this->belongsTo(Oilfcar0502::class,'oilfcar0502_id','id');
    }
}
