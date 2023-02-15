<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che09;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che09Test extends Model
{
    use HasFactory;

    protected $table = "f04che09_tests";
    protected $fillable = [
        "f04che09_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che09()
    {
        return $this->belongsTo(F04che09::class,'f04che09_id','id');
    }
}
