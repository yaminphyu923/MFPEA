<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040106;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040106Finance extends Model
{
    use HasFactory;

    protected $table = "fche040106_finances";
    protected $fillable = [
        "fche040106_id",
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

    public function fche040106()
    {
        return $this->belongsTo(Fche040106::class,'fche040106_id','id');
    }
}
