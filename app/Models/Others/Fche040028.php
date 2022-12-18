<?php

namespace App\Models\Others;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040028 extends Model
{
    use HasFactory;

    protected $table = "fche040028s";
    protected $fillable = [
        "job_number",
        "sample_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "sample",
        "sample_test1",
        "sample_test2",
        "water",
        "water_test1",
        "water_test2",
        "first_boiling",
        "first_boiling_test1",
        "first_boiling_test2",
        "second_boiling",
        "second_boiling_test1",
        "second_boiling_test2",
        "makeup",
        "makeup_test1",
        "makeup_test2",
        "taken",
        "taken_test1",
        "taken_test2",
        "residue",
        "residue_test1",
        "residue_test2",
        "filtrated",
        "filtrated_test1",
        "filtrated_test2",
        "extractive_cal",
        "extractive_cal_test1",
        "extractive_cal_test2",
        "result",
        "result_test1",
        "result_test2",
        "extractive",
        "extractive_test1",
        "extractive_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}
