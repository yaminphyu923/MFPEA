<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\F04che24;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che24Test extends Model
{
    use HasFactory;

    protected $table = "f04che24_tests";
    protected $fillable = [
        "f04che24_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che24()
    {
        return $this->belongsTo(F04che24::class,'f04che24_id','id');
    }
}
