<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GcTestParameter extends Model
{
    use HasFactory;

    protected $table = "gc_test_parameters";
    protected $fillable = [
        "name",
    ];
}
