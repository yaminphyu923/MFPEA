<?php

namespace App\Models\Others;

use App\Models\Others\Fche040123;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040123Finance extends Model
{
    use HasFactory;

    protected $table = "fche040123_finances";
    protected $fillable = [
        "fche040123_id",
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

    public function fche040123()
    {
        return $this->belongsTo(Fche040123::class,'fche040123_id','id');
    }
}
