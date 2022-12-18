<?php

namespace App\Models;

use App\Models\HMMineralCar0500;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMCar0500Test extends Model
{
    use HasFactory;

    protected $table = "h_m_m_car0500_tests";
    protected $fillable = [
        "hmm_car0500_id",
        "test_parameter",
        "test_method",
        "test_result",
        "unit",
        "detection_limit",
    ];

    public function test()
    {
        return $this->belongsTo(HMMineralCar0500::class,'hmm_car0500_id','id');
    }
}
