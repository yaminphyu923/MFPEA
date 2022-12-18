<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040061 extends Model
{
    use HasFactory;

    protected $table = "fche040061s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "chlorine",
        "chlorine_test1",
        "chlorine_test2",
        "volume",
        "volume_test1",
        "volume_test2",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "pillow",
        "pillow_test1",
        "pillow_test2",
        "reaction_time",
        "reaction_time_test1",
        "reaction_time_test2",
        "blank",
        "blank_test1",
        "blank_test2",
        "reading",
        "reading_test1",
        "reading_test2",
        "chlorine_cal",
        "chlorine_cal_test1",
        "chlorine_cal_test2",
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
