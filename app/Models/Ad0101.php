<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad0101 extends Model
{
    use HasFactory;

    protected $table = "ad0101s";

    protected $fillable = [
        'company_name',
        'customer_id',
        'address',
        'contact_person',
        'sample_name_code',
        'sample_description',
        'package_type',
        'request_type',
        'sampling_procedure',
        'decision_rule',
        'test_method',
        'sample_quantity',
        'tf_received_date',
        'sample_received_date',
        'sample_number',
        'received_quality',
        'temperature_sa',
        'physical_sp',
        'lab_report_date',
        'job_number',
        'signature',
        'name',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
