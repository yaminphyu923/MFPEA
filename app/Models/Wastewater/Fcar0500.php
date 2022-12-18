<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fcar0500 extends Model
{
    use HasFactory;

    protected $table = "fcar0500s";
    protected $fillable = [
        "job_number",
        "report_no",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "result",
        "bod_para",
        "bod_method",
        "bod_result",
        "bod_unit",
        "bod_value",
        "cod_para",
        "cod_method",
        "cod_result",
        "cod_unit",
        "cod_value",
        "oil_para",
        "oil_method",
        "oil_result",
        "oil_unit",
        "oil_value",
        "ph_para",
        "ph_method",
        "ph_result",
        "ph_unit",
        "ph_value",
        "nitrogen_para",
        "nitrogen_method",
        "nitrogen_result",
        "nitrogen_unit",
        "nitrogen_value",
        "phos_para",
        "phos_method",
        "phos_result",
        "phos_unit",
        "phos_value",
        "solid_para",
        "solid_method",
        "solid_result",
        "solid_unit",
        "solid_value",
        "sign",
        "name",
        "position",
        "check1",
        "check2",
    ];
}
