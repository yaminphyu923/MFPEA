<?php

namespace App\Models\Others;

use App\Models\Others\Fche040028;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040028Finance extends Model
{
    use HasFactory;

    protected $table = "fche040028_finances";
    protected $fillable = [
        "fche040028_id",
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

    public function fche040028()
    {
        return $this->belongsTo(Fche040028::class,'fche040028_id','id');
    }
}
