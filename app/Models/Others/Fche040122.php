<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040122 extends Model
{
    use HasFactory;

    protected $table = "fche040122s";
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
        "mgo",
        "mgo_test1",
        "mgo_test2",
        "water",
        "water_test1",
        "water_test2",
        "total_weight",
        "total_weight_test1",
        "total_weight_test2",
        "filtrate",
        "filtrate_test1",
        "filtrate_test2",
        "h2s04",
        "h2s04_test1",
        "h2s04_test2",
        "chlo",
        "chlo_test1",
        "chlo_test2",
        "koh",
        "koh_test1",
        "koh_test2",
        "digestion",
        "digestion_test1",
        "digestion_test2",
        "titer",
        "titer_test1",
        "titer_test2",
        "k",
        "k_test1",
        "k_test2",
        "wt",
        "wt_test1",
        "wt_test2",
        "coefficient",
        "coefficient_test1",
        "coefficient_test2",
        "caffeine_cal",
        "caffeine_cal_test1",
        "caffeine_cal_test2",
        "caffeine",
        "caffeine_test1",
        "caffeine_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
