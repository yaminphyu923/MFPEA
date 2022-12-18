<?php

namespace App\Models\Finances;

use App\Models\HMMChe040049;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040049Finance extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040049_finances";
    protected $fillable = [
        "hmm_che040049_id",
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

    public function hmmChe040049()
    {
        return $this->belongsTo(HMMChe040049::class,'hmm_che040049_id','id');
    }
}
