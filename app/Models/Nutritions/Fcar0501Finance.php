<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fcar0501;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fcar0501Finance extends Model
{
    use HasFactory;

    protected $table = "fcar0501_finances";
    protected $fillable = [
        "fcar0501_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fcar0501()
    {
        return $this->belongsTo(Fcar0501::class,'fcar0501_id','id');
    }
}
