<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HMMineralTest extends Model
{
    use HasFactory;
    protected $table = "h_m_mineral_tests";
    protected $fillable = [
        "test_parameter",
    ];
}
