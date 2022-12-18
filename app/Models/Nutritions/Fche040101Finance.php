<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040101Finance extends Model
{
    use HasFactory;

    protected $table = "fche040101_finances";
    protected $fillable = [
        "fche040101_id",
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

    public function fche040101()
    {
        return $this->belongsTo(Fche040101::class,'fche040101_id','id');
    }
}
