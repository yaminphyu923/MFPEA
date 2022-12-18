<?php

namespace App\Models\GCAnalysis;

use App\Models\GCAnalysis\Fche040029;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040029Finance extends Model
{
    use HasFactory;

    protected $table = "fche040029_finances";
    protected $fillable = [
        "fche040029_id",
        "receive_voucher",
        "amount",
        "date",
        "remark",
        "test_type",
        "receive_voucher_2",
        "amount_2",
        "date_2",
        "remark_2",
        "test_type_2",
        "status"
    ];


    public function fche040029()
    {
        return $this->belongsTo(Fche040029::class,'fche040029_id','id');
    }
}
