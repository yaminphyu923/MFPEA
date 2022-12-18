<?php

namespace App\Models\WaterTests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040117 extends Model
{
    use HasFactory;

    protected $table = "fche040117s";
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
        "a",
        "a_test1",
        "a_test2",
        "b",
        "b_test1",
        "b_test2",
        "total_cal",
        "total_cal_test1",
        "total_cal_test2",
        "dissolved_cal",
        "dissolved_cal_test1",
        "dissolved_cal_test2",
        "suspended_cal",
        "suspended_cal_test1",
        "suspended_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "total",
        "total_test1",
        "total_test2",
        "dissolved",
        "dissolved_test1",
        "dissolved_test2",
        "suspended",
        "suspended_test1",
        "suspended_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
