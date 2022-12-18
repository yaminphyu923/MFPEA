<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeavyMetalTestParameter extends Model
{
    use HasFactory;

    protected $table = "heavy_metal_test_parameters";
    protected $fillable = [
        "name",
    ];
}
