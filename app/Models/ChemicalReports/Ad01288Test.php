<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01288;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01288Test extends Model
{
    use HasFactory;

    protected $table = "ad01288_tests";
    protected $fillable = [
        "ad01288_id",
        "test_parameter",
        "test_method",
        "result",
        "unit",
        "detection",
    ];

    public function ad01288()
    {
        return $this->belongsTo(Ad01288::class,'ad01288_id','id');
    }
}
