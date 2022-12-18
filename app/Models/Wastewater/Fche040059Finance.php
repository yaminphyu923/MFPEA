<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040059;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040059Finance extends Model
{
    use HasFactory;

    protected $table = "fche040059_finances";
    protected $fillable = [
        "fche040059_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040059()
    {
        return $this->belongsTo(Fche040059::class,'fche040059_id','id');
    }
}
