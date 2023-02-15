<?php

namespace App\Models\WaterTests;

use App\Models\WaterTests\F04che26;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che26Test extends Model
{
    use HasFactory;

    protected $table = "f04che26_tests";
    protected $fillable = [
        "f04che26_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che26()
    {
        return $this->belongsTo(F04che26::class,'f04che26_id','id');
    }
}
