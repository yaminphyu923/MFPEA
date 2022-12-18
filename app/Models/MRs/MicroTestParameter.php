<?php

namespace App\Models\MRs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MicroTestParameter extends Model
{
    use HasFactory;

    protected $table = "micro_test_parameters";
    protected $fillable = [
        "name",
    ];
}
