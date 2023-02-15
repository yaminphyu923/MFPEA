<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\F04che27;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che27Test extends Model
{
    use HasFactory;

    protected $table = "f04che27_tests";
    protected $fillable = [
        "f04che27_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che27()
    {
        return $this->belongsTo(F04che27::class,'f04che27_id','id');
    }
}
