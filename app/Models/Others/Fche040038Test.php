<?php

namespace App\Models\Others;

use App\Models\Others\Fche040038;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040038Test extends Model
{
    use HasFactory;

    protected $table = "fche040038_tests";
    protected $fillable = [
        "fche040038_id",
        "data",
        "test1",
        "test2",
    ];

    public function fche040038()
    {
        return $this->belongsTo(Fche040038::class,'fche040038_id','id');
    }
}
