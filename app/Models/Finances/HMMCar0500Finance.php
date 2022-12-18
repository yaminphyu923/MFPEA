<?php

namespace App\Models\Finances;

use App\Models\HMMineralCar0500;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HMMCar0500Finance extends Model
{
    use HasFactory;

    protected $table = "h_m_m_car0500_finances";
    protected $fillable = [
        "hmm_car0500_id",
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

    public function hmmCar0500()
    {
        return $this->belongsTo(HMMineralCar0500::class,'hmm_car0500_id','id');
    }
}
