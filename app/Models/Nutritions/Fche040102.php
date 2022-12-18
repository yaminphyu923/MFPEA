<?php

namespace App\Models\Nutritions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040102 extends Model
{
    use HasFactory;

    protected $table = "fche040102s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "cru",
        "cru_test1",
        "cru_test2",
        "w1",
        "w1_test1",
        "w1_test2",
        "cruplussample",
        "cruplussample_test1",
        "cruplussample_test2",
        "w2",
        "w2_test1",
        "w2_test2",
        "ash_cal",
        "ash_cal_test1",
        "ash_cal_test2",
        "result",
        "result_test1",
        "result_test2",
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
