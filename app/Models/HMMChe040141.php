<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HMMChe040141 extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040141s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "weight",
        "weight_1",
        "weight_2",
        "nitric_volume",
        "nitric_volume_1",
        "nitric_volume_2",
        "hydrogen_volume",
        "hydrogen_volume_1",
        "hydrogen_volume_2",
        "volume",
        "volume_1",
        "volume_2",
        "df",
        "df_1",
        "df_2",
        "sd",
        "sd_1",
        "sd_2",
        "concentration",
        "concentration_1",
        "concentration_2",
        "reagent",
        "reagent_1",
        "reagent_2",
        "real_concentration",
        "real_concentration_1",
        "real_concentration_2",
        "ca",
        "ca_1",
        "ca_2",
        "remark",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
