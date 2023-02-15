<?php

namespace App\Models\MRs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use HasFactory;

    protected $table = "exports";
    protected $fillable = [
        "title",
        "company_name",
        "address",
        "phone",
        "lab_received_date",
        "sample_number",
        "product_name",
        "test_performed_date",
        "quantity",
        "packing",
        "loading",
        "discharge",
        "vessle_name",
        "po_number",
        "eori_number",
        "rex_no",
        "hs_code",
        "test_type",
        "issue_date",
        "results",
        "apc_para",
        "apc_method",
        "apc_result",
        "apc_before",
        "apc_after",
        "coliform_para",
        "coliform_method",
        "coliform_result",
        "coliform_before",
        "coliform_after",
        "coli_para",
        "coli_method",
        "coli_result",
        "coli_before",
        "coli_after",
        "staphy_para",
        "staphy_method",
        "staphy_result",
        "staphy_before",
        "staphy_after",
        "salmo_para",
        "salmo_method",
        "salmo_result",
        "salmo_before",
        "salmo_after",
        "yeast_mould_para",
        "yeast_mould_method",
        "yeast_mould_result",
        "yeast_mould_before",
        "yeast_mould_after",
        "method",
        "sign",
        "date",
        "checked_name",
        "position"
    ];
}
