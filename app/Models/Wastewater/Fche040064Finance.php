<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040064;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040064Finance extends Model
{
    use HasFactory;

    protected $table = "fche040064_finances";
    protected $fillable = [
        "fche040064_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040064()
    {
        return $this->belongsTo(Fche040064::class,'fche040064_id','id');
    }
}
