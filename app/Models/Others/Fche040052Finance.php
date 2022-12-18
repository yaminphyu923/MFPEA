<?php

namespace App\Models\Others;

use App\Models\Others\Fche040052;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040052Finance extends Model
{
    use HasFactory;

    protected $table = "fche040052_finances";
    protected $fillable = [
        "fche040052_id",
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

    public function fche040052()
    {
        return $this->belongsTo(Fche040052::class,'fche040052_id','id');
    }
}
