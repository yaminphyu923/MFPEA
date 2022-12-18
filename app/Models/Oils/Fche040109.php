<?php

namespace App\Models\Oils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040109 extends Model
{
    use HasFactory;

    protected $table = "fche040109s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "temperature",
        "temperature_test1",
        "temperature_test2",
        "brix_one",
        "brix_one_test1",
        "brix_one_test2",
        "index_one",
        "index_one_test1",
        "index_one_test2",
        "result",
        "result_test1",
        "result_test2",
        "index_two",
        "index_two_test1",
        "index_two_test2",
        "brix_two",
        "brix_two_test1",
        "brix_two_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
