<?php

namespace App\Models\AlcoholAnalysis;

use Illuminate\Database\Eloquent\Model;
use App\Models\AlcoholAnalysis\AlcoholFcar0501;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlcoholFcar0501Finance extends Model
{
    use HasFactory;

    protected $table = "alcohol_fcar0501_finances";
    protected $fillable = [
        "alcohol_fcar0501_id",
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

    public function aa_fcar0501()
    {
        return $this->belongsTo(AlcoholFcar0501::class,'alcohol_fcar0501_id','id');
    }
}
