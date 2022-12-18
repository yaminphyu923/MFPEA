<?php

namespace App\Models\MicroWorksheets;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M040101 extends Model
{
    use HasFactory;

    protected $table = "m040101_s";
    protected $fillable = [
        "job_number",
        "analysis_date",
        "customer_id",
        "description",
        "report_date",
        "received_date",
        "incubation_hours",
        "reference_method",
        "sample_homogenate",
        "diluent_homogenate",
        "calculation",
        "result",
        "analyzed_by",
        "analyzed_position",
        "analyzed_sign",
        "analyzed_date",
        "checked_by",
        "checked_position",
        "checked_sign",
        "checked_date",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
