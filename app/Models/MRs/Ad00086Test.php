<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad00086;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00086Test extends Model
{
    use HasFactory;

    protected $table = "ad00086_tests";
    protected $fillable = [
        "ad00086_id",
        "test_parameter",
        "test_method",
        "result",
        "range",
        "standard"
    ];

    public function ad00086()
    {
        return $this->belongsTo(Ad00086::class,'ad00086_id','id');
    }
}
