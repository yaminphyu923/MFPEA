<?php

namespace App\Models\Finances;

use App\Models\HMMChe040146;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040146Finance extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040146_finances";
    protected $fillable = [
        "hmm_che040146_id",
        "receive_voucher",
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

    public function hmmChe040146()
    {
        return $this->belongsTo(HMMChe040146::class,'hmm_che040146_id','id');
    }
}
