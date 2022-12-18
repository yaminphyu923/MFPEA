<?php

namespace App\Models\Nutritions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040105 extends Model
{
    use HasFactory;

    protected $table = "fche040105s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "aluminium",
        "aluminium_test1",
        "aluminium_test2",
        "sample",
        "sample_test1",
        "sample_test2",
        "beakerplusresidue",
        "beakerplusresidue_test1",
        "beakerplusresidue_test2",
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
