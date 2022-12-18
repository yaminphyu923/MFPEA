<?php

namespace App\Models\Finances;

use App\Models\HMMChe040037;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMChe040037Finance extends Model
{
    use HasFactory;

    protected $table = "h_m_m_che040037_finances";
    protected $fillable = [
        "hmm_che040037_id",
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

    public function hmmChe040037()
    {
        return $this->belongsTo(HMMChe040037::class,'hmm_che040037_id','id');
    }
}
