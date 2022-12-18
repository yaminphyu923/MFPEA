<?php

namespace App\Models\Wastewater;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fche040055 extends Model
{
    use HasFactory;

    protected $table = "fche040055s";
    protected $fillable = [
        "job_number",
        "product_name",
        "received_date",
        "initiated_date",
        "reported_date",
        "method",
        "volume",
        "volume_test1",
        "volume_test2",
        "dilution",
        "dilution_test1",
        "dilution_test2",
        "solutiona",
        "solutiona_test1",
        "solutiona_test2",
        "btablet",
        "btablet_test1",
        "btablet_test2",
        "temperature",
        "temperature_test1",
        "temperature_test2",
        "time",
        "time_test1",
        "time_test2",
        "digested",
        "digested_test1",
        "digested_test2",
        "solutiond",
        "solutiond_test1",
        "solutiond_test2",
        "reaction",
        "reaction_test1",
        "reaction_test2",
        "reading",
        "reading_test1",
        "reading_test2",
        "nitrogen",
        "nitrogen_test1",
        "nitrogen_test2",
        "result",
        "result_test1",
        "result_test2",
        "analysed_sign",
        "analysed_date",
        "analysed_name",
        "checked_sign",
        "checked_date",
        "checked_name",
    ];
}
