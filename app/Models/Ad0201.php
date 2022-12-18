<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad0201 extends Model
{
    use HasFactory;

    protected $table = "ad0201s";
    protected $fillable = [
        "job_number",
        "customer_id",
        "sample_name_code",
        "sample_description",
        "sample_type",
        "sample_amount",
        "arrival_temperature",
        "pakaging_type",
        "physical_condition_package",
        "admin_receiver",
        "admin_date_received",
        "lab_date_received",
        "lab_receiver",
        "lab_received",
        "storage_method",
        "test_type",
        "performed_duration",
        "disposal_date",
        "prepared_by",
        "prepared_position",
        "verified_by",
        "verified_position",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
