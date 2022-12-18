<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040059 extends Model
{
    use HasFactory;

    protected $table = "fche040059s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "lead_range",
        "lead_range_test1",
        "lead_range_test2",
        "volume",
        "volume_test1",
        "volume_test2",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "reagenta",
        "reagenta_test1",
        "reagenta_test2",
        "reaction_time",
        "reaction_time_test1",
        "reaction_time_test2",
        "solutionb",
        "solutionb_test1",
        "solutionb_test2",
        "treated",
        "treated_test1",
        "treated_test2",
        "reaction_time2",
        "reaction_time2_test1",
        "reaction_time2_test2",
        "read",
        "read_test1",
        "read_test2",
        "solutionc",
        "solutionc_test1",
        "solutionc_test2",
        "reaction_time3",
        "reaction_time3_test1",
        "reaction_time3_test2",
        "reading",
        "reading_test1",
        "reading_test2",
        "lead",
        "lead_test1",
        "lead_test2",
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
