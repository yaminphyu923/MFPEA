<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040120 extends Model
{
    use HasFactory;

    protected $table = "fche040120s";
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
        "silver",
        "silver_test1",
        "silver_test2",
        "nitric",
        "nitric_test1",
        "nitric_test2",
        "b",
        "b_test1",
        "b_test2",
        "t",
        "t_test1",
        "t_test2",
        "n",
        "n_test1",
        "n_test2",
        "salt_cal",
        "salt_cal_test1",
        "salt_cal_test2",
        "salt",
        "salt_test1",
        "salt_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
