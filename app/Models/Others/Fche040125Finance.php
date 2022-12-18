<?php

namespace App\Models\Others;

use App\Models\Others\Fche040125;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040125Finance extends Model
{
    use HasFactory;

    protected $table = "fche040125_finances";
    protected $fillable = [
        "fche040125_id",
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

    public function fche040125()
    {
        return $this->belongsTo(Fche040125::class,'fche040125_id','id');
    }
}
