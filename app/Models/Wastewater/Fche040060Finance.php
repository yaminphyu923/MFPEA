<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fche040060;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040060Finance extends Model
{
    use HasFactory;

    protected $table = "fche040060_finances";
    protected $fillable = [
        "fche040060_id",
        "voucher",
        "amount",
        "date",
        "remark",
    ];

    public function fche040060()
    {
        return $this->belongsTo(Fche040060::class,'fche040060_id','id');
    }
}
