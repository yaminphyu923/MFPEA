<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040052 extends Model
{
    use HasFactory;
    protected $table = "fche040052s";
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
        "alcohol",
        "alcohol_test1",
        "alcohol_test2",
        "hcl_titrant",
        "hcl_titrant_test1",
        "hcl_titrant_test2",
        "hcl_normality",
        "hcl_normality_test1",
        "hcl_normality_test2",
        "naoh_cal",
        "naoh_cal_test1",
        "naoh_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "naoh",
        "naoh_test1",
        "naoh_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
