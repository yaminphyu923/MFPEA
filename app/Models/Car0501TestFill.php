<?php

namespace App\Models;

use App\Models\Car0501;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car0501TestFill extends Model
{
    use HasFactory;

    protected $table = "car0501_test_fills";
    protected $fillable = [
        "car0501_id",
        "test_parameter",
        "test_method",
        "test_result",
    ];

    public function car0501()
    {
        return $this->belongsTo(Car0501::class,'car0501_id','id');
    }
}
