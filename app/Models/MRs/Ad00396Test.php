<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad00396;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00396Test extends Model
{
    use HasFactory;

    protected $table = "ad00396_tests";
    protected $fillable = [
        "ad00396_id",
        "test_parameter",
        "test_method",
        "result",
        "range",
        "standard"
    ];

    public function ad00396()
    {
        return $this->belongsTo(Ad00396::class,'ad00396_id','id');
    }
}
