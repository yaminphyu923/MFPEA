<?php

namespace App\Models;

use App\Models\HMMChe040048;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040048Test extends Model
{
    use HasFactory;
    protected $table = "h_m_m_che040048_tests";
    protected $fillable = [
        "hmm_che040048_id",
        "test_parameter",
        "first_test",
        "sec_test",
    ];

    public function test()
    {
        return $this->belongsTo(HMMChe040048::class,'hmm_che040048_id','id');
    }
}
