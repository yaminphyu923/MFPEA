<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040053;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040053Finance extends Model
{
    use HasFactory;

    protected $table = "fche040053_finances";
    protected $fillable = [
        "fche040053_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040053()
    {
        return $this->belongsTo(Fche040053::class,'fche040053_id','id');
    }
}
