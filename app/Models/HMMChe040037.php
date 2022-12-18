<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\HMMineralMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040037 extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040037s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "customer_id",
        "received_date",
        "initiated_date",
        "reported_date",
        "method_id",
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
        "zn",
        "zn_1",
        "zn_2",
        "remark",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];

    public function method()
    {
        return $this->belongsTo(HMMineralMethod::class,'method_id','id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
