<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01354;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01354Finance extends Model
{
    use HasFactory;

    protected $table = "ad01354_finances";
    protected $fillable = [
        "ad01354_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad01354()
    {
        return $this->belongsTo(Ad01354::class,'ad01354_id','id');
    }
}
