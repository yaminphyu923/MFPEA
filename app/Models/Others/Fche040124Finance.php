<?php

namespace App\Models\Others;

use App\Models\Others\Fche040124;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040124Finance extends Model
{
    use HasFactory;

    protected $table = "fche040124_finances";
    protected $fillable = [
        "fche040124_id",
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

    public function fche040124()
    {
        return $this->belongsTo(Fche040124::class,'fche040124_id','id');
    }
}
