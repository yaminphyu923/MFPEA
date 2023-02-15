<?php

namespace App\Models\MicroWorksheets;

use Illuminate\Database\Eloquent\Model;
use App\Models\MicroWorksheets\FMar0501Test;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FMar0501Test extends Model
{
    use HasFactory;

    protected $table = "f_mar0501_tests";
    protected $fillable = [
        "f_mar0501_id",
        "test_parameter",
        "method",
        "result",
    ];

    public function test()
    {
        return $this->belongsTo(FMar0501Test::class,'f_mar0501_id','id');
    }
}
