<?php

namespace App\Models\Wastewater;

use App\Models\Wastewater\Fcar0500;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fcar0500Finance extends Model
{
    use HasFactory;

    protected $table = "fcar0500_finances";
    protected $fillable = [
        "fcar0500_id",
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

    public function fcar0500()
    {
        return $this->belongsTo(Fcar0500::class,'fcar0500_id','id');
    }
}
