<?php

namespace App\Models\Oils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040112 extends Model
{
    use HasFactory;

    protected $table = "fche040112s";
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
        "hanus",
        "hanus_test1",
        "hanus_test2",
        "b",
        "b_test1",
        "b_test2",
        "s",
        "s_test1",
        "s_test2",
        "n",
        "n_test1",
        "n_test2",
        "iodine_cal",
        "iodine_cal_test1",
        "iodine_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "iodine",
        "iodine_test1",
        "iodine_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
