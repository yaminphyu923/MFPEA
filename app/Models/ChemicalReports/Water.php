<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    use HasFactory;

    protected $table = "waters";
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
        "total_para",
        "total_method",
        "total_result",
        "calcium_para",
        "calcium_method",
        "calcium_result",
        "mag_para",
        "mag_method",
        "mag_result",
        "solid_para",
        "solid_method",
        "solid_result",
        "dissolved_para",
        "dissolved_method",
        "dissolved_result",
        "suspended_para",
        "suspended_method",
        "suspended_result",
        "ph_para",
        "ph_method",
        "ph_result",
        "conductivity_para",
        "conductivity_method",
        "conductivity_result",
        "method",
        "sign",
        "date",
        "checked_name",
        "position"
    ];
}
