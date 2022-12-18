<?php

namespace App\Models\Others;

use App\Models\Others\F05;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F05Test extends Model
{
    use HasFactory;

    protected $table = "f05_tests";
    protected $fillable = [
        "f05_id",
        "test_parameter",
        "method",
        "result",
    ];

    public function f05()
    {
        return $this->belongsTo(F05::class,'f05_id','id');
    }
}
