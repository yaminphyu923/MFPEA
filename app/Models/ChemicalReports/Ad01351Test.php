<?php

namespace App\Models\ChemicalReports;

use App\Models\ChemicalReports\Ad01351;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01351Test extends Model
{
    use HasFactory;

    protected $table = "ad01351_tests";
    protected $fillable = [
        "ad01351_id",
        "test_parameter",
        "test_method",
        "result",
    ];

    public function ad01351()
    {
        return $this->belongsTo(Ad01351::class,'ad01351_id','id');
    }
}
