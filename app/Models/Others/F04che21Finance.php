<?php

namespace App\Models\Others;

use App\Models\Others\F04che21;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che21Finance extends Model
{
    use HasFactory;

    protected $table = "f04che21_finances";
    protected $fillable = [
        "f04che21_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function f04che21()
    {
        return $this->belongsTo(F04che21::class,'f04che21_id','id');
    }
}
