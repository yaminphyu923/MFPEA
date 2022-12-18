<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01341;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01341Finance extends Model
{
    use HasFactory;

    protected $table = "ad01341_finances";
    protected $fillable = [
        "ad01341_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad01341()
    {
        return $this->belongsTo(Ad01341::class,'ad01341_id','id');
    }
}
