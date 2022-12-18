<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040058 extends Model
{
    use HasFactory;

    protected $table = "fche040058s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "phenol",
        "phenol_test1",
        "phenol_test2",
        "volume",
        "volume_test1",
        "volume_test2",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "solutiona",
        "solutiona_test1",
        "solutiona_test2",
        "time",
        "time_test1",
        "time_test2",
        "reading",
        "reading_test1",
        "reading_test2",
        "phenol_cal",
        "phenol_cal_test1",
        "phenol_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
