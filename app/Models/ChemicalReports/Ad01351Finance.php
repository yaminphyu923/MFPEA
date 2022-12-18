<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01351;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01351Finance extends Model
{
    use HasFactory;


    protected $table = "ad01351_finances";
    protected $fillable = [
        "ad01351_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function ad01351()
    {
        return $this->belongsTo(Ad01351::class,'ad01351_id','id');
    }
}
