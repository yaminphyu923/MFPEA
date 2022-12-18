<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fcar0502;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fcar0502Finance extends Model
{
    use HasFactory;

    protected $table = "fcar0502_finances";
    protected $fillable = [
        "fcar0502_id",
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

    public function fcar0502()
    {
        return $this->belongsTo(Fcar0502::class,'fcar0502_id','id');
    }
}
