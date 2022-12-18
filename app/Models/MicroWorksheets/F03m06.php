<?php

namespace App\Models\MicroWorksheets;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F03m06 extends Model
{
    use HasFactory;

    protected $table = "f03m06s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "period",
        "homogenate",
        "method",

        "zero_plate1",
        "zero_plate2",

        "minus_one_plate1",
        "minus_one_plate2",

        "minus_two_plate1",
        "minus_two_plate2",

        "minus_three_plate1",
        "minus_three_plate2",

        "minus_four_plate1",
        "minus_four_plate2",

        "minus_five_plate1",
        "minus_five_plate2",
        "yeast_mould",
        "analysed_name",
        "analysed_sign",
        "analysed_date",
        "checked_name",
        "checked_sign",
        "checked_date",
    ];
}
