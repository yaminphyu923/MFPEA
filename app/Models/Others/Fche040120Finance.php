<?php

namespace App\Models\Others;

use App\Models\Others\Fche040120;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040120Finance extends Model
{
    use HasFactory;

    protected $table = "fche040120_finances";
    protected $fillable = [
        "fche040120_id",
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

    public function fche040120()
    {
        return $this->belongsTo(Fche040120::class,'fche040120_id','id');
    }
}
