<?php

namespace App\Models\Others;

use App\Models\Others\Fche040038;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040038Finance extends Model
{
    use HasFactory;

    protected $table = "fche040038_finances";
    protected $fillable = [
        "fche040038_id",
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

    public function fche040038()
    {
        return $this->belongsTo(Fche040038::class,'fche040038_id','id');
    }
}
