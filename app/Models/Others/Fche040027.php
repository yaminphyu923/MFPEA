<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040027 extends Model
{
    use HasFactory;

    protected $table = "fche040027s";
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
        "cruplusresidue",
        "cruplusresidue_test1",
        "cruplusresidue_test2",
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
        "ash_cal2",
        "ash_cal2_test1",
        "ash_cal2_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
