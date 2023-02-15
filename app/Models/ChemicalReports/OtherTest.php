<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Other;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OtherTest extends Model
{
    use HasFactory;

    protected $table = "other_tests";
    protected $fillable = [
        "other_id",
        "test_parameter",
        "test_method",
        "result",
    ];

    public function other()
    {
        return $this->belongsTo(Other::class,'other_id','id');
    }
}
