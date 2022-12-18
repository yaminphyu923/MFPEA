<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad01250;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01250Test extends Model
{
    use HasFactory;

    protected $table = "ad01250_tests";
    protected $fillable = [
        "ad01250_id",
        "test_parameter",
        "test_method",
        "result",
    ];

    public function ad01250()
    {
        return $this->belongsTo(Ad01250::class,'ad01250_id','id');
    }
}
