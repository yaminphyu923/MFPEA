<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01087;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01087Finance extends Model
{
    use HasFactory;

    protected $table = "ad01087_finances";
    protected $fillable = [
        "ad01087_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad01087()
    {
        return $this->belongsTo(Ad01087::class,'ad01087_id','id');
    }
}
