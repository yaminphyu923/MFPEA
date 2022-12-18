<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GcTestMethod extends Model
{
    use HasFactory;

    protected $table = "gc_test_methods";
    protected $fillable = [
        "name",
    ];
}
