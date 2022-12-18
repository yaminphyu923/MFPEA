<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040063 extends Model
{
    use HasFactory;

    protected $table = "fche040063s";
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
        "hcl_volume",
        "hcl_volume_test1",
        "hcl_volume_test2",
        "ether",
        "ether_test1",
        "ether_test2",
        "w1",
        "w1_test1",
        "w1_test2",
        "w2",
        "w2_test1",
        "w2_test2",
        "oil_grease",
        "oil_grease_test1",
        "oil_grease_test2",
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
