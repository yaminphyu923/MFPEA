<?php

namespace App\Models\Others;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F05 extends Model
{
    use HasFactory;

    protected $table = "f05_s";
    protected $fillable = [
        "job_number",
        "report_no",
        "issue_date",
        "analysis_date",
        "results",
        "remarks",
        "customer_id",
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
