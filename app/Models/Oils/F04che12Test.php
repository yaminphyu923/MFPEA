<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che12;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che12Test extends Model
{
    use HasFactory;

    protected $table = "f04che12_tests";
    protected $fillable = [
        "f04che12_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che12()
    {
        return $this->belongsTo(F04che12::class,'f04che12_id','id');
    }
}
