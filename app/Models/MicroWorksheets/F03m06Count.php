<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\F03m06;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F03m06Count extends Model
{
    use HasFactory;

    protected $table = "f03m06_counts";
    protected $fillable = [
        "f03m06_id",
        "dilution",
        "plate1",
        "plate2",
    ];

    public function f03m06()
    {
        return $this->belongsTo(F03m06::class,'f03m06_id','id');
    }
}
