<?php

namespace App\Models\Oils;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040111 extends Model
{
    use HasFactory;

    protected $table = "fche040111s";
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
        "koh",
        "koh_test1",
        "koh_test2",
        "water",
        "water_test1",
        "water_test2",
        "petro",
        "petro_test1",
        "petro_test2",
        "ethanol",
        "ethanol_test1",
        "ethanol_test2",
        "flask",
        "flask_test1",
        "flask_test2",
        "flask_residue",
        "flask_residue_test1",
        "flask_residue_test2",
        "residue",
        "residue_test1",
        "residue_test2",
        "unsap_cal",
        "unsap_cal_test1",
        "unsap_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "unsap",
        "unsap_test1",
        "unsap_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
