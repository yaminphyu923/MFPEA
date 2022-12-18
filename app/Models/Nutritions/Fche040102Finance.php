<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040102;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040102Finance extends Model
{
    use HasFactory;

    protected $table = "fche040102_finances";
    protected $fillable = [
        "fche040102_id",
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

    public function fche040102()
    {
        return $this->belongsTo(Fche040102::class,'fche040102_id','id');
    }
}
