<?php

namespace App\Models\WaterTests;

use App\Models\WaterTests\F04che20;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che20Test extends Model
{
    use HasFactory;

    protected $table = "f04che20_tests";
    protected $fillable = [
        "f04che20_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che20()
    {
        return $this->belongsTo(F04che20::class,'f04che20_id','id');
    }
}
