<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040124 extends Model
{
    use HasFactory;

    protected $table = "fche040124s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "sample",
        "water",
        "filtrate",
        "filtrate_test1",
        "filtrate_test2",
        "naoh",
        "naoh_test1",
        "naoh_test2",
        "titre",
        "titre_test1",
        "titre_test2",
        "factor",
        "factor_test1",
        "factor_test2",
        "acidity_cal",
        "acidity_cal_test1",
        "acidity_cal_test2",
        "acidity",
        "acidity_test1",
        "acidity_test2",
        "remark",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
