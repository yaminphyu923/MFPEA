<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $table = "members";
    protected $fillable = [
        "contact_person",
        "ms_no",
        "ms_date",
        "member_type_id",
        "category_id",
        "nrc",
        "business_reg",
        "business_regdate",
        "company_name_address",
        "product_item",
        "phone_no",
        "fax",
        "email",
        "entrance_fee",
        "annual_fee",
        "exp_date",
        "photo",
        "status",
        "name_address_myan",
        "ms_no_myan",
        "ms_date_myan",
        "phone_myan",
        "fax_myan",
        "nrc_myan",
        "business_reg_myan",
        "business_regdate_myan",
    ];

    public function memberType(){
        return $this->belongsTo(MemberType::class,'member_type_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
