<?php

namespace App\Models\Others;

use App\Models\Others\Fche040122;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040122Finance extends Model
{
    use HasFactory;

    protected $table = "fche040122_finances";
    protected $fillable = [
        "fche040122_id",
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

    public function fche040122()
    {
        return $this->belongsTo(Fche040122::class,'fche040122_id','id');
    }
}
