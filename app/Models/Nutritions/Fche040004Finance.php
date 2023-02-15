<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040004;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040004Finance extends Model
{
    use HasFactory;

    protected $table = "fche040004_finances";
    protected $fillable = [
        "fche040004_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040004()
    {
        return $this->belongsTo(Fche040004::class,'fche040004_id','id');
    }
}
