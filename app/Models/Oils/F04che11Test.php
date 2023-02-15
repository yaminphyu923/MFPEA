<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che11;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che11Test extends Model
{
    use HasFactory;

    protected $table = "f04che11_tests";
    protected $fillable = [
        "f04che11_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che11()
    {
        return $this->belongsTo(F04che11::class,'f04che11_id','id');
    }
}
