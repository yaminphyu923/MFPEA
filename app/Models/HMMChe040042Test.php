<?php

namespace App\Models;

use App\Models\HMMChe040042;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040042Test extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040042_tests";
    protected $fillable = [
        "hmm_che040042_id",
        "test_parameter",
        "first_test",
        "sec_test",
    ];

    public function test()
    {
        return $this->belongsTo(HMMChe040042::class,'hmm_che040042_id','id');
    }
}
