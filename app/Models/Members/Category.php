<?php

namespace App\Models\Members;

use App\Models\Members\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";
    protected $fillable = ["name","group_id"];

    public function group()
    {
        return $this->belongsTo(Group::class,'group_id','id');
    }
}
