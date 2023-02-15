<?php

namespace App\Models\Others;

use App\Models\Others\F04che13;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che13Test extends Model
{
    use HasFactory;

    protected $table = "f04che13_tests";
    protected $fillable = [
        "f04che13_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che13()
    {
        return $this->belongsTo(F04che13::class,'f04che13_id','id');
    }
}
