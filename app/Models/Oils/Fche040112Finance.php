<?php

namespace App\Models\Oils;

use App\Models\Oils\Fche040112;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040112Finance extends Model
{
    use HasFactory;

    protected $table = "fche040112_finances";
    protected $fillable = [
        "fche040112_id",
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

    public function fche040112()
    {
        return $this->belongsTo(Fche040112::class,'fche040112_id','id');
    }
}
