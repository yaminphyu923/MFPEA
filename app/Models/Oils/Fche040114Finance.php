<?php

namespace App\Models\Oils;

use App\Models\Oils\Fche040114;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040114Finance extends Model
{
    use HasFactory;

    protected $table = "fche040114_finances";
    protected $fillable = [
        "fche040114_id",
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

    public function fche040114()
    {
        return $this->belongsTo(Fche040114::class,'fche040114_id','id');
    }
}
