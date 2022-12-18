<?php

namespace App\Models\Nutritions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040103 extends Model
{
    use HasFactory;

    protected $table = "fche040103s";
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
        "cat",
        "cat_test1",
        "cat_test2",
        "h2so4",
        "h2so4_test1",
        "h2so4_test2",
        "water",
        "water_test1",
        "water_test2",
        "naoh",
        "naoh_test1",
        "naoh_test2",
        "receiver",
        "receiver_test1",
        "receiver_test2",
        "n",
        "n_test1",
        "n_test2",
        "t",
        "t_test1",
        "t_test2",
        "b",
        "b_test1",
        "b_test2",
        "f",
        "f_test1",
        "f_test2",
        "nitrogen_cal",
        "nitrogen_cal_test1",
        "nitrogen_cal_test2",
        "protein_cal",
        "protein_cal_test1",
        "protein_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "nitrogen",
        "nitrogen_test1",
        "nitrogen_test2",
        "protein",
        "protein_test1",
        "protein_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
