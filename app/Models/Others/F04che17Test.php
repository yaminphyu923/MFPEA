<?php

namespace App\Models\Others;

use App\Models\Others\F04che17;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che17Test extends Model
{
    use HasFactory;

    protected $table = "f04che17_tests";
    protected $fillable = [
        "f04che17_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che17()
    {
        return $this->belongsTo(F04che17::class,'f04che17_id','id');
    }
}
