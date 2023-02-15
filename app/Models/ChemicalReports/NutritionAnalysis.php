<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionAnalysis extends Model
{
    use HasFactory;

    protected $table = "nutrition_analyses";
    protected $fillable = [
        "title",
        "company_name",
        "address",
        "phone",
        "lab_received_date",
        "sample_number",
        "product_name",
        "test_performed_date",
        "test_type",
        "issue_date",
        "results",
        "moisture_para",
        "moisture_method",
        "moisture_result",
        "ash_para",
        "ash_method",
        "ash_result",
        "protein_para",
        "protein_method",
        "protein_result",
        "fiber_para",
        "fiber_method",
        "fiber_result",
        "fat_para",
        "fat_method",
        "fat_result",
        "carbo_para",
        "carbo_method",
        "carbo_result",
        "energy_para",
        "energy_method",
        "energy_result",
        "sodium_para",
        "sodium_method",
        "sodium_result",
        "method",
        "sign",
        "checked_name",
        "date",
        "position"
    ];

}
