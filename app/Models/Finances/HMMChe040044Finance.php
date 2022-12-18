<?php

namespace App\Models\Finances;

use App\Models\HMMChe040044;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040044Finance extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040044_finances";
    protected $fillable = [
        "hmm_che040044_id",
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

    public function hmmChe040044()
    {
        return $this->belongsTo(HMMChe040044::class,'hmm_che040044_id','id');
    }
}
