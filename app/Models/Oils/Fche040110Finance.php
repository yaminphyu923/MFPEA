<?php

namespace App\Models\Oils;

use App\Models\Oils\Fche040110;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040110Finance extends Model
{
    use HasFactory;

    protected $table = "fche040110_finances";
    protected $fillable = [
        "fche040110_id",
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

    public function fche040110()
    {
        return $this->belongsTo(Fche040110::class,'fche040110_id','id');
    }
}
