<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040056;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040056Finance extends Model
{
    use HasFactory;

    protected $table = "fche040056_finances";
    protected $fillable = [
        "fche040056_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040056()
    {
        return $this->belongsTo(Fche040056::class,'fche040056_id','id');
    }
}
