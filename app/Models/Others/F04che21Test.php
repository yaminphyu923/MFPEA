<?php

namespace App\Models\Others;

use App\Models\Others\F04che21;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class F04che21Test extends Model
{
    use HasFactory;

    protected $table = "f04che21_tests";
    protected $fillable = [
        "f04che21_id",
        "data",
        "test1",
        "test2",
    ];

    public function f04che21()
    {
        return $this->belongsTo(F04che21::class,'f04che21_id','id');
    }
}
