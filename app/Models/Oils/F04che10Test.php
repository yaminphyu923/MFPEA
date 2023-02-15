<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che10;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che10Test extends Model
{
    use HasFactory;

    protected $table = "f04che10_tests";
    protected $fillable = [
        "f04che10_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che10()
    {
        return $this->belongsTo(F04che10::class,'f04che10_id','id');
    }
}
