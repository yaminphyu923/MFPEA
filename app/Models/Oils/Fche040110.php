<?php

namespace App\Models\Oils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040110 extends Model
{
    use HasFactory;

    protected $table = "fche040110s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "sample",
        "sample_test1",
        "sample_test2",
        "koh",
        "koh_test1",
        "koh_test2",
        "hcl_sample",
        "hcl_sample_test1",
        "hcl_sample_test2",
        "hcl_blank",
        "hcl_blank_test1",
        "hcl_blank_test2",
        "hcl",
        "hcl_test1",
        "hcl_test2",
        "sap_cal",
        "sap_cal_test1",
        "sap_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "sap",
        "sap_test1",
        "sap_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
