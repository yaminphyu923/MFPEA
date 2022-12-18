<?php

namespace App\Models\AlcoholAnalysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlcoholFcar0501 extends Model
{
    use HasFactory;

    protected $table = "alcohol_fcar0501s";
    protected $fillable = [
        "job_number",
        "report_no",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "result",
        "ace_para",
        "ace_method",
        "ace_result",
        "ethyl_para",
        "ethyl_method",
        "ethyl_result",
        "methanol_para",
        "methanol_method",
        "methanol_result",
        "propanol_para",
        "propanol_method",
        "propanol_result",
        "iso_para",
        "iso_method",
        "iso_result",
        "methyl_para",
        "methyl_method",
        "methyl_result",
        "sign",
        "name",
        "position",
        "check1",
        "check2",
    ];
}
