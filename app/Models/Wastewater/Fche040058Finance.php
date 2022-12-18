<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040058;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040058Finance extends Model
{
    use HasFactory;

    protected $table = "fche040058_finances";
    protected $fillable = [
        "fche040058_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040058()
    {
        return $this->belongsTo(Fche040058::class,'fche040058_id','id');
    }
}
