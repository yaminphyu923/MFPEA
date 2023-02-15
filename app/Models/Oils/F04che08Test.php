<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che08;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che08Test extends Model
{
    use HasFactory;

    protected $table = "f04che08_tests";
    protected $fillable = [
        "f04che08_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che08()
    {
        return $this->belongsTo(F04che08::class,'f04che08_id','id');
    }
}
