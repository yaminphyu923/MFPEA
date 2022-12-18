<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\Car0501Test;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car0501 extends Model
{
    use HasFactory;

    protected $table = "car0501s";
    protected $fillable = [
        "job_number",
        "report_number",
        "customer_id",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "result",
        "lauric_12_0_para",
        "lauric_12_0_method",
        "lauric_12_0_result",
        "myristic_14_0_para",
        "myristic_14_0_method",
        "myristic_14_0_result",
        "myristoleic_14_1_para",
        "myristoleic_14_1_method",
        "myristoleic_14_1_result",
        "palmitic_16_0_para",
        "palmitic_16_0_method",
        "palmitic_16_0_result",
        "palmitoleic_16_1_para",
        "palmitoleic_16_1_method",
        "palmitoleic_16_1_result",
        "stearic_18_0_para",
        "stearic_18_0_method",
        "stearic_18_0_result",
        "oleictrans_18_1_para",
        "oleictrans_18_1_method",
        "oleictrans_18_1_result",
        "oleic_18_1_para",
        "oleic_18_1_method",
        "oleic_18_1_result",
        "linoleictrans_18_2_para",
        "linoleictrans_18_2_method",
        "linoleictrans_18_2_result",
        "linoleic_18_2_para",
        "linoleic_18_2_method",
        "linoleic_18_2_result",
        "linoleic_18_3_para",
        "linoleic_18_3_method",
        "linoleic_18_3_result",
        "arachidic_20_0_para",
        "arachidic_20_0_method",
        "arachidic_20_0_result",
        "paullinic_20_1_para",
        "paullinic_20_1_method",
        "paullinic_20_1_result",
        "arachidonic_20_4_para",
        "arachidonic_20_4_method",
        "arachidonic_20_4_result",
        "bchenic_22_0_para",
        "bchenic_22_0_method",
        "bchenic_22_0_result",
        "erucic_22_1_para",
        "erucic_22_1_method",
        "erucic_22_1_result",
        "lignoceric_24_0_para",
        "lignoceric_24_0_method",
        "lignoceric_24_0_result",
        "remark",
        "sign",
        "name",
        "position",
        "checkby1",
        "checkby2",
        "status",
    ];

    public function test()
    {
        return $this->belongsTo(Car0501Test::class,'test_parameter','id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
