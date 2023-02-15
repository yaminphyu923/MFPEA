<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040104;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040104Test extends Model
{
    use HasFactory;


    protected $table = "fche040104_tests";
    protected $fillable = [
        "fche040104_id",
        "data",
        "test1",
        "test2",
    ];

    public function fche040104()
    {
        return $this->belongsTo(Fche040104::class,'fche040104_id','id');
    }
}
