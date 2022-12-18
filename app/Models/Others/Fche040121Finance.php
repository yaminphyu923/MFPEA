<?php

namespace App\Models\Others;

use App\Models\Others\Fche040121;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040121Finance extends Model
{
    use HasFactory;

    protected $table = "fche040121_finances";
    protected $fillable = [
        "fche040121_id",
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

    public function fche040121()
    {
        return $this->belongsTo(Fche040121::class,'fche040121_id','id');
    }
}
