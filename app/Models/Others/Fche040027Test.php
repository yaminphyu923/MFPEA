<?php

namespace App\Models\Others;

use App\Models\Others\Fche040027;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fche040027Test extends Model
{
    use HasFactory;

    protected $table = "fche040027_tests";
    protected $fillable = [
        "fche040027_id",
        "data",
        "test1",
        "test2",
    ];

    public function fche040027()
    {
        return $this->belongsTo(Fche040027::class,'fche040027_id','id');
    }
}
