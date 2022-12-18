<?php

namespace App\Models\Others;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040123 extends Model
{
    use HasFactory;

    protected $table = "fche040123s";
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
        "gelatin",
        "gelatin_test1",
        "gelatin_test2",
        "kaolin",
        "kaolin_test1",
        "kaolin_test2",
        "indigo",
        "indigo_test1",
        "indigo_test2",
        "potassium",
        "potassium_test1",
        "potassium_test2",
        "filtratea",
        "filtratea_test1",
        "filtratea_test2",
        "filtrateb",
        "filtrateb_test1",
        "filtrateb_test2",
        "f",
        "f_test1",
        "f_test2",
        "c",
        "c_test1",
        "c_test2",
        "tannin_cal",
        "tannin_cal_test1",
        "tannin_cal_test2",
        "tannin",
        "tannin_test1",
        "tannin_test2",
        "remark",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
