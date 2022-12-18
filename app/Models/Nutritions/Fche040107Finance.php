<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040107;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040107Finance extends Model
{
    use HasFactory;

    protected $table = "fche040107_finances";
    protected $fillable = [
        "fche040107_id",
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

    public function fche040107()
    {
        return $this->belongsTo(Fche040107::class,'fche040107_id','id');
    }
}
