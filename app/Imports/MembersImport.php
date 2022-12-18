<?php

namespace App\Imports;

use App\Models\Members\Member;
use Maatwebsite\Excel\Concerns\ToModel;

class MembersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Member([
            'contact_person' => (isset($row[0]))?$row[0]:'-',
            'ms_no' => (isset($row[1]))?$row[1]:'-',
            'ms_date' => (isset($row[2]))?$row[2]:'-',
            'member_type_id' => (isset($row[3]))?$row[3]:'-',
            'nrc' => (isset($row[4]))?$row[4]:'-',
            'business_reg' => (isset($row[5]))?$row[5]:'-',
            'business_regdate' => (isset($row[6]))?$row[6]:'-',
            'category_id' => (isset($row[7]))?$row[7]:'-',
            'company_name_address' => (isset($row[8]))?$row[8]:'-',
            'product_item' => (isset($row[9]))?$row[9]:'-',
            'phone_no' => (isset($row[10]))?$row[10]:'-',
            'fax' => (isset($row[11]))?$row[11]:'-',
            'email' => (isset($row[12]))?$row[12]:'-',
            'name_address_myan' => (isset($row[13]))?$row[13]:'-',
            'ms_no_myan' => (isset($row[14]))?$row[14]:'-',
            'ms_date_myan' => (isset($row[15]))?$row[15]:'-',
            'phone_myan' => (isset($row[16]))?$row[16]:'-',
            'fax_myan' => (isset($row[17]))?$row[17]:'-',
            'nrc_myan' => (isset($row[18]))?$row[18]:'-',
            'business_reg_myan' => (isset($row[19]))?$row[19]:'-',
            'business_regdate_myan' => (isset($row[20]))?$row[20]:'-',
        ]);
    }
}
