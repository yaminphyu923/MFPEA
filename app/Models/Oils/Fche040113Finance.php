<?php

namespace App\Models\Oils;

use App\Models\Oils\Fche040113;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040113Finance extends Model
{
    use HasFactory;

    protected $table = "fche040113_finances";
    protected $fillable = [
        "fche040113_id",
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

    public function fche040113()
    {
        return $this->belongsTo(Fche040113::class,'fche040113_id','id');
    }
}
