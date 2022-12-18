<?php

namespace App\Models\Others;

use App\Models\Others\Fche040051;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040051Finance extends Model
{
    use HasFactory;

    protected $table = "fche040051_finances";
    protected $fillable = [
        "fche040051_id",
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

    public function fche040051()
    {
        return $this->belongsTo(Fche040051::class,'fche040051_id','id');
    }
}
