<?php

namespace App\Models\MicroWorksheets;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FMar0501 extends Model
{
    use HasFactory;

    protected $table = "f_mar0501s";
    protected $fillable = [
        "job_number",
        "report_no",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "results",
        "apc_test",
        "apc_method",
        "apc_result",
        "coliform_test",
        "coliform_method",
        "coliform_result",
        "ecoli_test",
        "ecoli_method",
        "ecoli_result",
        "sta_test",
        "sta_method",
        "sta_result",
        "sal_test",
        "sal_method",
        "sal_result",
        "yeast_test",
        "yeast_method",
        "yeast_result",
        "remarks",
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
