<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040104;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040104Finance extends Model
{
    use HasFactory;

    protected $table = "fche040104_finances";
    protected $fillable = [
        "fche040104_id",
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

    public function fche040104()
    {
        return $this->belongsTo(Fche040104::class,'fche040104_id','id');
    }
}
