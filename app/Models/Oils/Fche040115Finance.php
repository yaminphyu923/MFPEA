<?php

namespace App\Models\Oils;

use App\Models\Oils\Fche040115;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040115Finance extends Model
{
    use HasFactory;

    protected $table = "fche040115_finances";
    protected $fillable = [
        "fche040115_id",
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

    public function fche040115()
    {
        return $this->belongsTo(Fche040115::class,'fche040115_id','id');
    }
}
