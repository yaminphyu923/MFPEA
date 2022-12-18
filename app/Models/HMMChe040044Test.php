<?php

namespace App\Models;

use App\Models\HMMChe040044;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040044Test extends Model
{
    use HasFactory;
    protected $table = "h_m_m_che040044_tests";
    protected $fillable = [
        "hmm_che040044_id",
        "test_parameter",
        "first_test",
        "sec_test",
    ];

    public function test()
    {
        return $this->belongsTo(HMMChe040044::class,'hmm_che040044_id','id');
    }
}
