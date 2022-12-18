<?php

namespace App\Models\Finances;

use App\Models\HMMChe040045;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040045Finance extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040045_finances";
    protected $fillable = [
        "hmm_che040045_id",
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

    public function hmmChe040045()
    {
        return $this->belongsTo(HMMChe040045::class,'hmm_che040045_id','id');
    }
}
