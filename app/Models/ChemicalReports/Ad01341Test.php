<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01341;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01341Test extends Model
{
    use HasFactory;
    protected $table = "ad01341_tests";
    protected $fillable = [
        "ad01341_id",
        "test_parameter",
        "test_method",
        "result",
    ];

    public function ad01341()
    {
        return $this->belongsTo(Ad01341::class,'ad01341_id','id');
    }
}
