<?php

namespace App\Models\MicroWorksheets;

use App\Models\MicroWorksheets\M020101;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M020101Count extends Model
{
    use HasFactory;

    protected $table = "m020101_counts";
    protected $fillable = [
        "m020101_id",
        "dilution",
        "plate1",
        "plate2",
    ];

    public function m020101()
    {
        return $this->belongsTo(M020101::class,'m020101_id','id');
    }
}
