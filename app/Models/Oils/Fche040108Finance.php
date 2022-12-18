<?php

namespace App\Models\Oils;

use App\Models\Oils\Fche040108;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040108Finance extends Model
{
    use HasFactory;

    protected $table = "fche040108_finances";
    protected $fillable = [
        "fche040108_id",
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

    public function fche040108()
    {
        return $this->belongsTo(Fche040108::class,'fche040108_id','id');
    }
}
