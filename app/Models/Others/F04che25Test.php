<?php

namespace App\Models\Others;

use App\Models\Others\F04che25;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che25Test extends Model
{
    use HasFactory;

    protected $table = "f04che25_tests";
    protected $fillable = [
        "f04che25_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che25()
    {
        return $this->belongsTo(F04che25::class,'f04che25_id','id');
    }
}
