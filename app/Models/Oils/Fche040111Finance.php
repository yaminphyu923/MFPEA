<?php

namespace App\Models\Oils;

use App\Models\Oils\Fche040111;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040111Finance extends Model
{
    use HasFactory;

    protected $table = "fche040111_finances";
    protected $fillable = [
        "fche040111_id",
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

    public function fche040111()
    {
        return $this->belongsTo(Fche040111::class,'fche040111_id','id');
    }
}
