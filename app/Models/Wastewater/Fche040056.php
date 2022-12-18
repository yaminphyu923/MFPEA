<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040056 extends Model
{
    use HasFactory;

    protected $table = "fche040056s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "volume",
        "volume_test1",
        "volume_test2",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "potassium",
        "potassium_test1",
        "potassium_test2",
        "temperature",
        "temperature_test1",
        "temperature_test2",
        "reactor_time",
        "reactor_time_test1",
        "reactor_time_test2",
        "sodium",
        "sodium_test1",
        "sodium_test2",
        "phosver",
        "phosver_test1",
        "phosver_test2",
        "reaction_time",
        "reaction_time_test1",
        "reaction_time_test2",
        "reading",
        "reading_test1",
        "reading_test2",
        "phos",
        "phos_test1",
        "phos_test2",
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
