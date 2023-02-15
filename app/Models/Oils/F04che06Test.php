<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che06;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che06Test extends Model
{
    use HasFactory;

    protected $table = "f04che06_tests";
    protected $fillable = [
        "f04che06_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che06()
    {
        return $this->belongsTo(F04che06::class,'f04che06_id','id');
    }
}
