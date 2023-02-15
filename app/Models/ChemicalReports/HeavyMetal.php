<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeavyMetal extends Model
{
    use HasFactory;

    protected $table = "heavy_metals";
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
        "as_para",
        "as_method",
        "as_result",
        "as_unit",
        "as_limit",
        "pb_para",
        "pb_method",
        "pb_result",
        "pb_unit",
        "pb_limit",
        "cu_para",
        "cu_method",
        "cu_result",
        "cu_unit",
        "cu_limit",
        "zn_para",
        "zn_method",
        "zn_result",
        "zn_unit",
        "zn_limit",
        "hg_para",
        "hg_method",
        "hg_result",
        "hg_unit",
        "hg_limit",
        "method",
        "sign",
        "date",
        "checked_name",
        "position"
    ];
}
