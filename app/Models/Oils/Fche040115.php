<?php

namespace App\Models\Oils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040115 extends Model
{
    use HasFactory;

    protected $table = "fche040115s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "container",
        "container_test1",
        "container_test2",
        "w1",
        "w1_test1",
        "w1_test2",
        "sample_container",
        "sample_container_test1",
        "sample_container_test2",
        "w2",
        "w2_test1",
        "w2_test2",
        "moisture_cal",
        "moisture_cal_test1",
        "moisture_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "moisture",
        "moisture_test1",
        "moisture_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
