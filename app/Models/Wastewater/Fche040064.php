<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040064 extends Model
{
    use HasFactory;

    protected $table = "fche040064s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "calibration",
        "calibration_test1",
        "calibration_test2",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "reading",
        "reading_test1",
        "reading_test2",
        "result",
        "result_test1",
        "result_test2",
        "remark",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
