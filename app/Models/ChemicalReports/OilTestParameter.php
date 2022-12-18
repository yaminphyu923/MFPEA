<?php

namespace App\Models\ChemicalReports;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OilTestParameter extends Model
{
    use HasFactory;

    protected $table = "oil_test_parameters";
    protected $fillable = [
        "name",
    ];
}
