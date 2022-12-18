<?php

namespace App\Models\Others;

use App\Models\Others\Fche040126;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040126Finance extends Model
{
    use HasFactory;

    protected $table = "fche040126_finances";
    protected $fillable = [
        "fche040126_id",
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

    public function fche040126()
    {
        return $this->belongsTo(Fche040126::class,'fche040126_id','id');
    }
}
