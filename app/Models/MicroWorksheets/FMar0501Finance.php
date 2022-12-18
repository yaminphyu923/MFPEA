<?php

namespace App\Models\MicroWorksheets;

use Illuminate\Database\Eloquent\Model;
use App\Models\MicroWorksheets\FMar0501;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FMar0501Finance extends Model
{
    use HasFactory;

    protected $table = "f_mar0501_finances";
    protected $fillable = [
        "f_mar0501_id",
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

    public function fmar0501()
    {
        return $this->belongsTo(FMar0501::class,'f_mar0501_id','id');
    }
}
