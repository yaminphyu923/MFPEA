<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HMMChe040047Test extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040047_tests";
    protected $fillable = [
        "hmm_che040047_id",
        "test_parameter",
        "first_test",
        "sec_test",
    ];

    public function test()
    {
        return $this->belongsTo(HMMChe040047::class,'hmm_che040047_id','id');
    }
}
