<?php

namespace App\Models\Nutritions;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fcar0501 extends Model
{
    use HasFactory;

    protected $table = "fcar0501s";
    protected $fillable = [
        "job_number",
        "report_no",
        "sample_name",
        "received_date",
        "analysis_date",
        "issue_date",
        "results",
        "customer_id",
        "remark",
        "sign",
        "name",
        "position",
        "check1",
        "check2",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
