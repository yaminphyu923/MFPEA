<?php

namespace App\Models\Oils;

use App\Models\Oils\Fche040109;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040109Finance extends Model
{
    use HasFactory;

    protected $table = "fche040109_finances";
    protected $fillable = [
        "fche040109_id",
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

    public function fche040109()
    {
        return $this->belongsTo(Fche040109::class,'fche040109_id','id');
    }
}
