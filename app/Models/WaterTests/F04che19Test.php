<?php

namespace App\Models\WaterTests;

use App\Models\WaterTests\F04che19;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che19Test extends Model
{
    use HasFactory;

    protected $table = "f04che19_tests";
    protected $fillable = [
        "f04che19_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che19()
    {
        return $this->belongsTo(F04che19::class,'f04che19_id','id');
    }
}
