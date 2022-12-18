<?php

namespace App\Models;

use App\Models\HMMChe040050;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040050Test extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040050_tests";
    protected $fillable = [
        "hmm_che040050_id",
        "test_parameter",
        "first_test",
        "sec_test",
    ];

    public function test()
    {
        return $this->belongsTo(HMMChe040050::class,'hmm_che040050_id','id');
    }
}
