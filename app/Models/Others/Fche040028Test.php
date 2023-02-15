<?php

namespace App\Models\Others;

use App\Models\Others\Fche040028;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040028Test extends Model
{
    use HasFactory;

    protected $table = "fche040028_tests";
    protected $fillable = [
        "fche040028_id",
        "data",
        "test1",
        "test2",
    ];

    public function fche040028()
    {
        return $this->belongsTo(Fche040028::class,'fche040028_id','id');
    }
}
