<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040054;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040054Finance extends Model
{
    use HasFactory;

    protected $table = "fche040054_finances";
    protected $fillable = [
        "fche040054_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040054()
    {
        return $this->belongsTo(Fche040054::class,'fche040054_id','id');
    }
}
