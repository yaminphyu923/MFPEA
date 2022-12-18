<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionTestParameter extends Model
{
    use HasFactory;

    protected $table = "nutrition_test_parameters";
    protected $fillable = [
        "name",
    ];
}
