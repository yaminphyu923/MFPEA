<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad00879;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00879Test extends Model
{
    use HasFactory;

    protected $table = "ad00879_tests";
    protected $fillable = [
        "ad00879_id",
        "test_parameter",
        "test_method",
        "result",
    ];

    public function ad00879()
    {
        return $this->belongsTo(Ad00879::class,'ad00879_id','id');
    }
}
