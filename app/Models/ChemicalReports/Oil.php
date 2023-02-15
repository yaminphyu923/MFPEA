<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oil extends Model
{
    use HasFactory;

    protected $table = "oil";
    protected $fillable = [
        "title",
        "company_name",
        "address",
        "phone",
        "lab_received_date",
        "sample_number",
        "product_name",
        "test_performed_date",
        "test_type",
        "issue_date",
        "results",
        "gravity_para",
        "gravity_method",
        "gravity_result",
        "index_para",
        "index_method",
        "index_result",
        "sapo_para",
        "sapo_method",
        "sapo_result",
        "unsapo_para",
        "unsapo_method",
        "unsapo_result",
        "iodine_para",
        "iodine_method",
        "iodine_result",
        "acid_para",
        "acid_method",
        "acid_result",
        "peroxide_para",
        "peroxide_method",
        "peroxide_result",
        "moisture_para",
        "moisture_method",
        "moisture_result",
        "method",
        "sign",
        "checked_name",
        "position"
    ];
}
