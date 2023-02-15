<?php

namespace App\Models\Oils;

use App\Models\Oils\F04che14;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che14Test extends Model
{
    use HasFactory;

    protected $table = "f04che14_tests";
    protected $fillable = [
        "f04che14_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che14()
    {
        return $this->belongsTo(F04che14::class,'f04che14_id','id');
    }
}
