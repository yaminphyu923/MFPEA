<?php

namespace App\Models\Nutritions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fcar0502 extends Model
{
    use HasFactory;

    protected $table = "fcar0502s";
    protected $fillable = [
        "job_number",
        "report_no",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "results",
        "moisture",
        "moisture_ref",
        "moisture_result_g",
        "moisture_result_ml",
        "ash",
        "ash_ref",
        "ash_result_g",
        "ash_result_ml",
        "protein",
        "protein_ref",
        "protein_result_g",
        "protein_result_ml",
        "fiber",
        "fiber_ref",
        "fiber_result_g",
        "fiber_result_ml",
        "fat",
        "fat_ref",
        "fat_result_g",
        "fat_result_ml",
        "carbo",
        "carbo_ref",
        "carbo_result_g",
        "carbo_result_ml",
        "energy",
        "energy_ref",
        "energy_result_g",
        "energy_result_ml",
        "na",
        "na_ref",
        "na_result_g",
        "na_result_ml",
        "remark",
        "sign",
        "name",
        "position",
        "check1",
        "check2",
        "one_package",
        "energy_fact",
        "protein_fact",
        "fat_fact",
        "carbo_fact",
        "na_fact",
    ];
}
