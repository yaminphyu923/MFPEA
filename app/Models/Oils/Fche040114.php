<?php

namespace App\Models\Oils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040114 extends Model
{
    use HasFactory;

    protected $table = "fche040114s";
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
        "ki",
        "ki_test1",
        "ki_test2",
        "water",
        "water_test1",
        "water_test2",
        "s",
        "s_test1",
        "s_test2",
        "b",
        "b_test1",
        "b_test2",
        "n",
        "n_test1",
        "n_test2",
        "peroxide_cal",
        "peroxide_cal_test1",
        "peroxide_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "peroxide",
        "peroxide_test1",
        "peroxide_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
