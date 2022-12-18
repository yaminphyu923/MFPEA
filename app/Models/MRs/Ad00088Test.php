<?php

namespace App\Models\MRs;

use App\Models\MRs\Ad00088;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00088Test extends Model
{
    use HasFactory;

    protected $table = "ad00088_tests";
    protected $fillable = [
        "ad00088_id",
        "test_parameter",
        "test_method",
        "result",
        "range",
        "standard"
    ];

    public function ad00088()
    {
        return $this->belongsTo(Ad00088::class,'ad00088_id','id');
    }
}
