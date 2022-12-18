<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040038 extends Model
{
    use HasFactory;

    protected $table = "fche040038s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "wt",
        "wt_test1",
        "wt_test2",
        "water",
        "water_test1",
        "water_test2",
        "blank",
        "blank_test1",
        "blank_test2",
        "sample",
        "sample_test1",
        "sample_test2",
        "hcl",
        "hcl_test1",
        "hcl_test2",
        "ash_cal",
        "ash_cal_test1",
        "ash_cal_test2",
        "ash",
        "ash_test1",
        "ash_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
