<?php

namespace App\Models\Nutritions;

use App\Models\Nutritions\Fche040001;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040001Test extends Model
{
    use HasFactory;

    protected $table = "fche040001_tests";
    protected $fillable = [
        "fche040001_id",
        "data",
        "test1",
        "test2",
    ];

    public function fche040001()
    {
        return $this->belongsTo(Fche040001::class,'fche040001_id','id');
    }
}
