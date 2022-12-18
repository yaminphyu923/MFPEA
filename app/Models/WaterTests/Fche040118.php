<?php

namespace App\Models\WaterTests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040118 extends Model
{
    use HasFactory;

    protected $table = "fche040118s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "calibration",
        "calibration_test1",
        "calibration_test2",
        "sample",
        "sample_test1",
        "sample_test2",
        "temperature",
        "temperature_test1",
        "temperature_test2",
        "result",
        "result_test1",
        "result_test2",
        "ph",
        "ph_test1",
        "ph_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
