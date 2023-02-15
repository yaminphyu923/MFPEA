<?php

namespace App\Models\WaterTests;

use App\Models\WaterTests\F04che28;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che28Test extends Model
{
    use HasFactory;

    protected $table = "f04che28_tests";
    protected $fillable = [
        "f04che28_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che28()
    {
        return $this->belongsTo(F04che28::class,'f04che28_id','id');
    }
}
