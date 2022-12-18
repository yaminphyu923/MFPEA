<?php

namespace App\Models\GCAnalysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040029 extends Model
{
    use HasFactory;

    protected $table = "fche040029s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "sample_weight",
        "sample_weight_1",
        "sample_weight_2",
        "koh_volume",
        "koh_volume_1",
        "koh_volume_2",
        "koh_heating_time",
        "koh_heating_time_1",
        "koh_heating_time_2",
        "boron_volume",
        "boron_volume_1",
        "boron_volume_2",
        "boron_heating_time",
        "boron_heating_time_1",
        "boron_heating_time_2",
        "potassium_weight",
        "potassium_weight_1",
        "potassium_weight_2",
        "water_volume",
        "water_volume_1",
        "water_volume_2",
        "petro_volume",
        "petro_volume_1",
        "petro_volume_2",
        "chlo_volume",
        "chlo_volume_1",
        "chlo_volume_2",
        "remark",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
