<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040004;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040004Test extends Model
{
    use HasFactory;

    protected $table = "fche040004_tests";
    protected $fillable = [
        "fche040004_id",
        "data",
        "test1",
        "test2",
    ];

    public function fche040004()
    {
        return $this->belongsTo(Fche040004::class,'fche040004_id','id');
    }
}
