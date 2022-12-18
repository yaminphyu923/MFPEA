<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040125 extends Model
{
    use HasFactory;

    protected $table = "fche040125s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "temperature",
        "temperature_test1",
        "temperature_test2",
        "brix_reading",
        "brix_reading_test1",
        "brix_reading_test2",
        "brix",
        "brix_test1",
        "brix_test2",
        "remark",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
