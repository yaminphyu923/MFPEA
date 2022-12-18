<?php

namespace App\Models\ChemicalReports;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad00879 extends Model
{
    use HasFactory;

    protected $table = "ad00879s";
    protected $fillable = [
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
        "customer_id",
        "method",
        "sign",
        "checked_name",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
