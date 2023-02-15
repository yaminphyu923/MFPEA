<?php

namespace App\Models\Nutritions;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040001 extends Model
{
    use HasFactory;

    protected $table = "fche040001s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "customer_id",
        "analyzed_by",
        "analyzed_date",
        "analyzed_sign",
        "checked_by",
        "checked_date",
        "checked_sign",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
