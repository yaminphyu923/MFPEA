<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad01254;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad01254Test extends Model
{
    use HasFactory;

    protected $table = "ad01254_tests";
    protected $fillable = [
        "ad01254_id",
        "test_parameter",
        "test_method",
        "before_result",
        "after_result"
    ];

    public function ad01254()
    {
        return $this->belongsTo(Ad01254::class,'ad01254_id','id');
    }
}
