<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterTestParameter extends Model
{
    use HasFactory;

    protected $table = "water_test_parameters";
    protected $fillable = [
        "name",
    ];
}
