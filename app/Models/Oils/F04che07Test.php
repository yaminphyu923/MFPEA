<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che07;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che07Test extends Model
{
    use HasFactory;

    protected $table = "f04che07_tests";
    protected $fillable = [
        "f04che07_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che07()
    {
        return $this->belongsTo(F04che07::class,'f04che07_id','id');
    }
}
