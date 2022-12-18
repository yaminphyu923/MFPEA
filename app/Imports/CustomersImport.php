<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'name' => (isset($row[0]))?$row[0]:'-',
            'phone' => (isset($row[1]))?$row[1]:'-',
            'address' => (isset($row[2]))?$row[2]:'-',
            'company_name' => (isset($row[3]))?$row[3]:'-',
            'product_name' => (isset($row[4]))?$row[4]:'-',
            'email' => (isset($row[5]))?$row[5]:'-',
        ]);
    }
}
