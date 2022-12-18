<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01087;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01087Test extends Model
{
    use HasFactory;

    protected $table = "ad01087_tests";
    protected $fillable = [
        "ad01087_id",
        "test_parameter",
        "test_method",
        "result",
    ];

    public function ad01087()
    {
        return $this->belongsTo(Ad01087::class,'ad01087_id','id');
    }
}
