<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\M010101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M010101Count extends Model
{
    use HasFactory;

    protected $table = "m010101_counts";
    protected $fillable = [
        "m010101_id",
        "dilution",
        "plate1",
        "plate2",
    ];

    public function m010101()
    {
        return $this->belongsTo(M010101::class,'m010101_id','id');
    }
}
