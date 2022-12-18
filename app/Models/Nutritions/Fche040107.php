<?php

namespace App\Models\Nutritions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040107 extends Model
{
    use HasFactory;

    protected $table = "fche040107s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "a",
        "a_test1",
        "a_test2",
        "b",
        "b_test1",
        "b_test2",
        "c",
        "c_test1",
        "c_test2",
        "d",
        "d_test1",
        "d_test2",
        "e",
        "e_test1",
        "e_test2",
        "f",
        "f_test1",
        "f_test2",
        "energy_cal",
        "energy_cal_test1",
        "energy_cal_test2",
        "carbo",
        "carbo_test1",
        "carbo_test2",
        "energy",
        "energy_test1",
        "energy_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
        "one_package",
        "energy_fact",
        "protein_fact",
        "fat_fact",
        "carbo_fact",
        "sodium_fact",
    ];
}
