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
            'name' => (isset($row[0]))?$row[0]:'-',
            'father_name' => (isset($row[1]))?$row[1]:'-',
            'birth_date' => (isset($row[2]))?$row[2]:'-',
            'birth_place' => (isset($row[3]))?$row[3]:'-',
            'nationality' => (isset($row[4]))?$row[4]:'-',
            'nrc' => (isset($row[5]))?$row[5]:'-',
            'edu' => (isset($row[6]))?$row[6]:'-',
            'occupation' => (isset($row[7]))?$row[7]:'-',
            'resident_no' => (isset($row[8]))?$row[8]:'-',
            'resident_street' => (isset($row[9]))?$row[9]:'-',
            'resident_township' => (isset($row[10]))?$row[10]:'-',
            'resident_city' => (isset($row[11]))?$row[11]:'-',
            'resident_state' => (isset($row[12]))?$row[12]:'-',
            'postal_code' => (isset($row[13]))?$row[13]:'-',
            'phone' => (isset($row[14]))?$row[14]:'-',
            'member_id' => (isset($row[15]))?$row[15]:'-',
            'member_type_id' => (isset($row[16]))?$row[16]:'-',
            'company_name' => (isset($row[17]))?$row[17]:'-',
            'registration_no_date' => (isset($row[18]))?$row[18]:'-',
            'business_name' => (isset($row[19]))?$row[19]:'-',
            'business_no_date' => (isset($row[20]))?$row[20]:'-',
            'paid_capital' => (isset($row[21]))?$row[21]:'-',
            'employee_no' => (isset($row[22]))?$row[22]:'-',
            'contact_person' => (isset($row[23]))?$row[23]:'-',
            'designaion' => (isset($row[24]))?$row[24]:'-',
            'office_no' => (isset($row[25]))?$row[25]:'-',
            'office_street' => (isset($row[26]))?$row[26]:'-',
            'office_ward' => (isset($row[27]))?$row[27]:'-',
            'office_township' => (isset($row[28]))?$row[28]:'-',
            'office_city' => (isset($row[29]))?$row[29]:'-',
            'office_state' => (isset($row[30]))?$row[30]:'-',
            'office_phone' => (isset($row[31]))?$row[31]:'-',
            'fax' => (isset($row[32]))?$row[32]:'-',
            'viber' => (isset($row[33]))?$row[33]:'-',
            'website' => (isset($row[34]))?$row[34]:'-',
            'business_type_id' => (isset($row[35]))?$row[35]:'-',
            'business_text' => (isset($row[36]))?$row[36]:'-',
            'ms_no' => (isset($row[37]))?$row[37]:'-',
            'ms_date' => (isset($row[38]))?$row[38]:'-',
            'business_reg' => (isset($row[39]))?$row[39]:'-',
            'business_regdate' => (isset($row[40]))?$row[40]:'-',
            'category_id' => (isset($row[41]))?$row[41]:'-',
            'company_name_address' => (isset($row[42]))?$row[42]:'-',
            'product_item' => (isset($row[43]))?$row[43]:'-',
            'email' => (isset($row[44]))?$row[44]:'-',
            'name_address_myan' => (isset($row[45]))?$row[45]:'-',
            'ms_no_myan' => (isset($row[46]))?$row[46]:'-',
            'ms_date_myan' => (isset($row[47]))?$row[47]:'-',
        ]);
    }
}
