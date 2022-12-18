<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car0501Test extends Model
{
    use HasFactory;

    protected $table = "car0501_tests";
    protected $fillable = [
        "test_parameter",
    ];
}
