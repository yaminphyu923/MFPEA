<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040051 extends Model
{
    use HasFactory;

    protected $table = "fche040051s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "sample",
        "sample_test1",
        "sample_test2",
        "magnesium",
        "magnesium_test1",
        "magnesium_test2",
        "water",
        "water_test1",
        "water_test2",
        "hcl",
        "hcl_test1",
        "hcl_test2",
        "sample_titrant",
        "sample_titrant_test1",
        "sample_titrant_test2",
        "blank_titrant",
        "blank_titrant_test1",
        "blank_titrant_test2",
        "tvbn",
        "tvbn_test1",
        "tvbn_test2",
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
