<?php

namespace App\Models;

use App\Models\HMMChe040043;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040043Test extends Model
{
    use HasFactory;
    protected $table = "h_m_m_che040043_tests";
    protected $fillable = [
        "hmm_che040043_id",
        "test_parameter",
        "first_test",
        "sec_test",
    ];

    public function test()
    {
        return $this->belongsTo(HMMChe040043::class,'hmm_che040043_id','id');
    }
}
