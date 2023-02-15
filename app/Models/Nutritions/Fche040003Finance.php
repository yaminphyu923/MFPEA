<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040003;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040003Finance extends Model
{
    use HasFactory;

    protected $table = "fche040003_finances";
    protected $fillable = [
        "fche040003_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040003()
    {
        return $this->belongsTo(Fche040003::class,'fche040003_id','id');
    }
}
