<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040039 extends Model
{
    use HasFactory;

    protected $table = "fche040039s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "ki",
        "ki_test1",
        "ki_test2",
        "distilled_water",
        "distilled_water_test1",
        "distilled_water_test2",
        "acetic_acid",
        "acetic_acid_test1",
        "acetic_acid_test2",
        "sample",
        "sample_test1",
        "sample_test2",
        "titration",
        "titration_test1",
        "titration_test2",
        "blank",
        "blank_test1",
        "blank_test2",
        "sodium",
        "sodium_test1",
        "sodium_test2",
        "cl_cal",
        "cl_cal_test1",
        "cl_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "cl",
        "cl_test1",
        "cl_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
