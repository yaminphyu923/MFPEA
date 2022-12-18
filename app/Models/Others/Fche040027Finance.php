<?php

namespace App\Models\Others;

use App\Models\Others\Fche040027;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040027Finance extends Model
{
    use HasFactory;

    protected $table = "fche040027_finances";
    protected $fillable = [
        "fche040027_id",
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

    public function fche040027()
    {
        return $this->belongsTo(Fche040027::class,'fche040027_id','id');
    }
}
