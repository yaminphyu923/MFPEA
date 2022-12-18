<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040105;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040105Finance extends Model
{
    use HasFactory;

    protected $table = "fche040105_finances";
    protected $fillable = [
        "fche040105_id",
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

    public function fche040105()
    {
        return $this->belongsTo(Fche040105::class,'fche040105_id','id');
    }
}
