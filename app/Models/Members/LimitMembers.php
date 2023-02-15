<?php

namespace App\Models\Members;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LimitMembers extends Model
{
    use HasFactory;

    protected $table="limit_members";
    protected $fillable = ["limit_member","member_id"];
}
