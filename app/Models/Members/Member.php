<?php

namespace App\Models\Members;

use App\Models\Members\Category;
use App\Models\Members\MemberType;
use App\Models\Members\BusinessType;
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
        "name",
        "father_name",
        "birth_date",
        "birth_place",
        "nationality",
        "edu",
        "occupation",
        "resident_no",
        "resident_street",
        "resident_township",
        "resident_city",
        "resident_state",
        "postal_code",
        "phone",
        "company_name",
        "registration_no_date",
        "business_name",
        "paid_capital",
        "employee_no",
        "designaion",
        "office_no",
        "office_street",
        "office_ward",
        "office_township",
        "office_city",
        "office_state",
        "office_phone",
        "viber",
        "website",
        "business_type_id",
        "business_text"
    ];

    public function memberType(){
        return $this->belongsTo(MemberType::class,'member_type_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function businessType(){
        return $this->belongsTo(BusinessType::class,'business_type_id','id');
    }
}
