<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\M030101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M030101Count extends Model
{
    use HasFactory;

    protected $table = "m030101_counts";
    protected $fillable = [
        "m030101_id",
        "dilution",
        "plate1",
        "plate2",
    ];

    public function m030101()
    {
        return $this->belongsTo(M030101::class,'m030101_id','id');
    }
}
