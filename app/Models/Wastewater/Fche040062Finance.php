<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040062;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040062Finance extends Model
{
    use HasFactory;

    protected $table = "fche040062_finances";
    protected $fillable = [
        "fche040062_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040062()
    {
        return $this->belongsTo(Fche040062::class,'fche040062_id','id');
    }
}
