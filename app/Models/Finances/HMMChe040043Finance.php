<?php

namespace App\Models\Finances;

use App\Models\HMMChe040043;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040043Finance extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040043_finances";
    protected $fillable = [
        "hmm_che040043_id",
        "voucher",
        "amount",
        "date",
        "remark",
        "test_type",
        "voucher_2",
        "amount_2",
        "date_2",
        "remark_2",
        "test_type_2",
        "status"
    ];

    public function hmmChe040043()
    {
        return $this->belongsTo(HMMChe040043::class,'hmm_che040043_id','id');
    }
}
