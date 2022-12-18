<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnualFee extends Model
{
    use HasFactory;

    protected $table="annual_fees";
    protected $fillable = ["member_id","annual_fee","exp_date"];

    public function member()
    {
        return $this->belongsTo(Member::class,'member_id','id');
    }
}
