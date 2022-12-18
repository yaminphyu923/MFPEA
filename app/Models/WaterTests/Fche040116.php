<?php

namespace App\Models\WaterTests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040116 extends Model
{
    use HasFactory;

    protected $table = "fche040116s";
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
        "distilled",
        "distilled_test1",
        "distilled_test2",
        "buffer",
        "buffer_test1",
        "buffer_test2",
        "indicator",
        "indicator_test1",
        "indicator_test2",
        "t",
        "t_test1",
        "t_test2",
        "b",
        "b_test1",
        "b_test2",
        "edta",
        "edta_test1",
        "edta_test2",
        "result",
        "result_test1",
        "result_test2",
        "hardness",
        "hardness_test1",
        "hardness_test2",
        "ca",
        "ca_test1",
        "ca_test2",
        "mg",
        "mg_test1",
        "mg_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
