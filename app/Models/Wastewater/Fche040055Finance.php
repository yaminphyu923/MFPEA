<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040055;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040055Finance extends Model
{
    use HasFactory;

    protected $table = "fche040055_finances";
    protected $fillable = [
        "fche040055_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040055()
    {
        return $this->belongsTo(Fche040055::class,'fche040055_id','id');
    }
}
