<?php

namespace App\Models\WaterTests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wtfcar0502 extends Model
{
    use HasFactory;

    protected $table = "wtfcar0502s";
    protected $fillable = [
        "job_number",
        "report_no",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "result",
        "total_para",
        "total_method",
        "total_result",
        "calcium_para",
        "calcium_method",
        "calcium_result",
        "magnesium_para",
        "magnesium_method",
        "magnesium_result",
        "solid_para",
        "solid_method",
        "solid_result",
        "dissolved_para",
        "dissolved_method",
        "dissolved_result",
        "suspended_para",
        "suspended_method",
        "suspended_result",
        "ph_para",
        "ph_method",
        "ph_result",
        "conductivity_para",
        "conductivity_method",
        "conductivity_result",
        "remark",
        "sign",
        "name",
        "position",
        "check1",
        "check2",
    ];
}
