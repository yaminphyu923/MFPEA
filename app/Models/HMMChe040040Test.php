<?php

namespace App\Models;

use App\Models\HMMChe040040;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040040Test extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040040_tests";
    protected $fillable = [
        "hmm_che040040_id",
        "test_parameter",
        "first_test",
        "sec_test",
    ];

    public function test()
    {
        return $this->belongsTo(HMMChe040040::class,'hmm_che040040_id','id');
    }
}
