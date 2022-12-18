<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad00879;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00879Finance extends Model
{
    use HasFactory;

    protected $table = "ad00879_finances";
    protected $fillable = [
        "ad00879_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad00879()
    {
        return $this->belongsTo(Ad00879::class,'ad00879_id','id');
    }
}
