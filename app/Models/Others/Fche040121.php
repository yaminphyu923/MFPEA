<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040121 extends Model
{
    use HasFactory;

    protected $table = "fche040121s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "v0",
        "v0_test1",
        "v0_test2",
        "v1",
        "v1_test1",
        "v1_test2",
        "mass",
        "mass_test1",
        "mass_test2",
        "sugar_cal",
        "sugar_cal_test1",
        "sugar_cal_test2",
        "sugar",
        "sugar_test1",
        "sugar_test2",
        "remark",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
