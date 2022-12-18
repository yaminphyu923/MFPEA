<?php

namespace App\Models\MRs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MicroTestMethod extends Model
{
    use HasFactory;

    protected $table = "micro_test_methods";
    protected $fillable = [
        "name",
    ];
}
