<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HMMineralMethod extends Model
{
    use HasFactory;
    protected $table = "h_m_mineral_methods";
    protected $fillable = [
        "name",
    ];
}
