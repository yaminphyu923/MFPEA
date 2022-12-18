<?php

namespace App\Models;

use App\Models\HMMChe040036;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040036Test extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040036_tests";
    protected $fillable = [
        "hmm_che040036_id",
        "test_parameter",
        "first_test",
        "sec_test",
    ];

    public function test()
    {
        return $this->belongsTo(HMMChe040036::class,'hmm_che040036_id','id');
    }
}
