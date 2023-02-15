<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\F03m05;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F03m05Agar extends Model
{
    use HasFactory;

    protected $table = "f03m05_agars";
    protected $fillable = [
        "f03m05_id",
        "agar",
        "tsi_slant",
        "tsi_butt",
        "tsi_h2s",
        "tsi_gas",
        "li_slant",
        "li_butt",
        "li_h2s",
        "li_gas",
    ];

    public function f03m05()
    {
        return $this->belongsTo(F03m05::class,'f03m05_id','id');
    }
}
