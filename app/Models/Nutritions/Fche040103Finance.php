<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040103;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040103Finance extends Model
{
    use HasFactory;

    protected $table = "fche040103_finances";
    protected $fillable = [
        "fche040103_id",
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

    public function fche040103()
    {
        return $this->belongsTo(Fche040103::class,'fche040103_id','id');
    }
}
