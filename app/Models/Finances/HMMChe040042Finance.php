<?php

namespace App\Models\Finances;

use App\Models\HMMChe040042;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040042Finance extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040042_finances";
    protected $fillable = [
        "hmm_che040042_id",
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

    public function hmmChe040042()
    {
        return $this->belongsTo(HMMChe040042::class,'hmm_che040042_id','id');
    }
}
