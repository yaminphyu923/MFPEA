<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040057;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040057Finance extends Model
{
    use HasFactory;

    protected $table = "fche040057_finances";
    protected $fillable = [
        "fche040057_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040057()
    {
        return $this->belongsTo(Fche040057::class,'fche040057_id','id');
    }
}
