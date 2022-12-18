<?php

namespace App\Models\Oils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040108 extends Model
{
    use HasFactory;

    protected $table = "fche040108s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "temperature",
        "temperature_test1",
        "temperature_test2",
        "container",
        "container_test1",
        "container_test2",
        "container_water",
        "container_water_test1",
        "container_water_test2",
        "water",
        "water_test1",
        "water_test2",
        "container_sample",
        "container_sample_test1",
        "container_sample_test2",
        "sample",
        "sample_test1",
        "sample_test2",
        "gravity_cal",
        "gravity_cal_test1",
        "gravity_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "gravity",
        "gravity_test1",
        "gravity_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
