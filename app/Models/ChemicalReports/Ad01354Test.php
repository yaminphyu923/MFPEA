<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01354;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01354Test extends Model
{
    use HasFactory;

    protected $table = "ad01354_tests";
    protected $fillable = [
        "ad01354_id",
        "test_parameter",
        "test_method",
        "result",
        "unit",
        "detection",
    ];

    public function ad01354()
    {
        return $this->belongsTo(Ad01354::class,'ad01354_id','id');
    }
}
