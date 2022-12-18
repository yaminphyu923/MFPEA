<?php

namespace App\Models\Nutritions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040106 extends Model
{
    use HasFactory;

    protected $table = "fche040106s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "acid_method",
        "alkali_method",
        "sample",
        "sample_test1",
        "sample_test2",
        "h2o",
        "h2o_test1",
        "h2o_test2",
        "nh4oh",
        "nh4oh_test1",
        "nh4oh_test2",
        "alcohol",
        "alcohol_test1",
        "alcohol_test2",
        "first_alcohol",
        "first_alcohol_test1",
        "first_alcohol_test2",
        "hcl",
        "hcl_test1",
        "hcl_test2",
        "second_alcohol",
        "second_alcohol_test1",
        "second_alcohol_test2",
        "residue",
        "residue_test1",
        "residue_test2",
        "fat_cal",
        "fat_cal_test1",
        "fat_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "fat",
        "fat_test1",
        "fat_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
