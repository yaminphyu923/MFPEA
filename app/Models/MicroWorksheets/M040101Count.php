<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\M040101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M040101Count extends Model
{
    use HasFactory;

    protected $table = "m040101_counts";
    protected $fillable = [
        "m040101_id",
        "dilution",
        "plate1",
        "plate2",
    ];

    public function m040101()
    {
        return $this->belongsTo(M040101::class,'m040101_id','id');
    }
}
