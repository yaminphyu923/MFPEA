<?php

namespace App\Models\Oils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oilfcar0502 extends Model
{
    use HasFactory;

    protected $table = "oilfcar0502s";
    protected $fillable = [
        "job_number",
        "report_no",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "result",
        "gravity_para",
        "gravity_method",
        "gravity_result",
        "index_para",
        "index_method",
        "index_result",
        "sap_para",
        "sap_method",
        "sap_result",
        "unsap_para",
        "unsap_method",
        "unsap_result",
        "iodine_para",
        "iodine_method",
        "iodine_result",
        "acid_para",
        "acid_method",
        "acid_result",
        "peroxide_para",
        "peroxide_method",
        "peroxide_result",
        "moisture_para",
        "moisture_method",
        "moisture_result",
        "remark",
        "sign",
        "name",
        "position",
        "check1",
        "check2",
    ];
}
