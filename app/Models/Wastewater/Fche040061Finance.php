<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040061;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040061Finance extends Model
{
    use HasFactory;

    protected $table = "fche040061_finances";
    protected $fillable = [
        "fche040061_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040061()
    {
        return $this->belongsTo(Fche040061::class,'fche040061_id','id');
    }
}
