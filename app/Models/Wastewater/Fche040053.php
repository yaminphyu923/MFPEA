<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040053 extends Model
{
    use HasFactory;

    protected $table = "fche040053s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "bod",
        "bod_test1",
        "bod_test2",
        "volume",
        "volume_test1",
        "volume_test2",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "pillow",
        "pillow_test1",
        "pillow_test2",
        "pellet",
        "pellet_test1",
        "pellet_test2",
        "incubation",
        "incubation_test1",
        "incubation_test2",
        "reading",
        "reading_test1",
        "reading_test2",
        "bod_cal",
        "bod_cal_test1",
        "bod_cal_test2",
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
