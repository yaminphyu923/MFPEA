<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040054 extends Model
{
    use HasFactory;

    protected $table = "fche040054s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "cod",
        "cod_test1",
        "cod_test2",
        "volume",
        "volume_test1",
        "volume_test2",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "water",
        "water_test1",
        "water_test2",
        "reactor",
        "reactor_test1",
        "reactor_test2",
        "time",
        "time_test1",
        "time_test2",
        "reading",
        "reading_test1",
        "reading_test2",
        "cod_cal",
        "cod_cal_test1",
        "cod_cal_test2",
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
