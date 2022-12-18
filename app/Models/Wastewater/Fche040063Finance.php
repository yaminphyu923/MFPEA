<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040063;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040063Finance extends Model
{
    use HasFactory;

    protected $table = "fche040063_finances";
    protected $fillable = [
        "fche040063_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040063()
    {
        return $this->belongsTo(Fche040063::class,'fche040063_id','id');
    }
}
