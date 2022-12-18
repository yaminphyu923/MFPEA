<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMineralCar0500 extends Model
{
    use HasFactory;
    protected $table = "h_m_mineral_car0500s";
    protected $fillable = [
        "job_number",
        "report_number",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "result",
        "as_para",
        "as_method",
        "as_result",
        "as_unit",
        "as_limit",
        "ca_para",
        "ca_method",
        "ca_result",
        "ca_unit",
        "ca_limit",
        "cd_para",
        "cd_method",
        "cd_result",
        "cd_unit",
        "cd_limit",
        "cr_para",
        "cr_method",
        "cr_result",
        "cr_unit",
        "cr_limit",
        "cu_para",
        "cu_method",
        "cu_result",
        "cu_unit",
        "cu_limit",
        "fe_para",
        "fe_method",
        "fe_result",
        "fe_unit",
        "fe_limit",
        "pb_para",
        "pb_method",
        "pb_result",
        "pb_unit",
        "pb_limit",
        "mg_para",
        "mg_method",
        "mg_result",
        "mg_unit",
        "mg_limit",
        "hg_para",
        "hg_method",
        "hg_result",
        "hg_unit",
        "hg_limit",
        "k_para",
        "k_method",
        "k_result",
        "k_unit",
        "k_limit",
        "se_para",
        "se_method",
        "se_result",
        "se_unit",
        "se_limit",
        "na_para",
        "na_method",
        "na_result",
        "na_unit",
        "na_limit",
        "zn_para",
        "zn_method",
        "zn_result",
        "zn_unit",
        "zn_limit",
        "remark",
        "sign",
        "name",
        "position",
        "checkby1",
        "checkby2",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
