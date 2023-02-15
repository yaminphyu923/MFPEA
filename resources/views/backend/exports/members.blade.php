<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="datatable table table-stripped table-hover">
                    <thead class="btn-theme text-white">
                        <tr>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Date of Birth</th>
                            <th>Place of Birth</th>
                            <th>Nationality</th>
                            <th>NRC No</th>
                            <th>Education</th>
                            <th>Present Occupation</th>
                            <th>Resident No</th>
                            <th>Resident Street</th>
                            <th>Resident Township</th>
                            <th>Resident City</th>
                            <th>Resident State/Division</th>
                            <th>Postal Code</th>
                            <th>Phone</th>
                            <th>Member ID</th>
                            <th>Member Type</th>
                            <th>Company Name</th>
                            <th>Registration No and Date</th>
                            <th>လုပ်ငန်းအမည်</th>
                            <th>လုပ်ငန်းမှတ်ပုံတင်အမှတ်နှင့်နေ့စွဲ</th>
                            <th>Paid up Capital</th>
                            <th>Numbers of Employees</th>
                            <th>Contact Person</th>
                            <th>Designation</th>
                            <th>Office No</th>
                            <th>Office Street</th>
                            <th>Office Ward</th>
                            <th>Office Township</th>
                            <th>Office City</th>
                            <th>Office State/Division</th>
                            <th>Phone</th>
                            <th>Fax</th>
                            <th>Viber</th>
                            <th>Website</th>
                            <th>Type of Business</th>
                            <th>#</th>


                            <th>M/S No(ID No)</th>
                            <th>M/S Date</th>

                            <th>Business Registration</th>
                            <th>Business Registration Date</th>
                            <th>Category</th>
                            <th>Company Name/Address</th>
                            <th>Product Item</th>


                            <th>Email</th>
                            <th>အသင်းဝင်နာမည်နဲ့လိပ်စာ</th>
                            <th>အသင်းဝင်အမှတ်</th>
                            <th>အသင်းဝင် ရက်စွဲ</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->father_name }}</td>
                                <td>{{ $member->birth_date }}</td>
                                <td>{{ $member->birth_place }}</td>
                                <td>{{ $member->nationality }}</td>
                                <td>{{ $member->nrc }}</td>
                                <td>{{ $member->edu }}</td>
                                <td>{{ $member->occupation }}</td>
                                <td>{{ $member->resident_no }}</td>
                                <td>{{ $member->resident_street }}</td>
                                <td>{{ $member->resident_township }}</td>
                                <td>{{ $member->resident_city }}</td>
                                <td>{{ $member->resident_state }}</td>
                                <td>{{ $member->postal_code }}</td>
                                <td>{{ $member->phone }}</td>
                                <td>{{ $member->member_id }}</td>
                                <td>{{ $member->memberType != null ? $member->memberType->member_type_name : '' }}</td>
                                <td>{{ $member->company_name }}</td>
                                <td>{{ $member->registration_no_date }}</td>
                                <td>{{ $member->business_name }}</td>
                                <td>{{ $member->business_no_date }}</td>
                                <td>{{ $member->paid_capital }}</td>
                                <td>{{ $member->employee_no }}</td>
                                <td>{{ $member->contact_person }}</td>
                                <td>{{ $member->designaion }}</td>
                                <td>{{ $member->office_no }}</td>
                                <td>{{ $member->office_street }}</td>
                                <td>{{ $member->office_ward }}</td>
                                <td>{{ $member->office_township }}</td>
                                <td>{{ $member->office_city }}</td>
                                <td>{{ $member->office_state }}</td>
                                <td>{{ $member->office_phone }}</td>
                                <td>{{ $member->fax }}</td>
                                <td>{{ $member->viber }}</td>
                                <td>{{ $member->website }}</td>
                                <td>{{ $member->businessType ? $member->businessType->business_type_name : '' }}</td>
                                <td>{{ $member->business_text }}</td>


                                <td>{{ $member->ms_no }}</td>
                                <td>{{ date('d-M-Y', strtotime($member->ms_date)) }}</td>

                                <td>{{ $member->business_reg }}</td>
                                <td>{{ $member->business_regdate }}</td>
                                <td>{{ $member->category != null ? $member->category->name : '' }}
                                </td>
                                <td>{{ $member->company_name_address }}</td>
                                <td>{{ $member->product_item }}</td>


                                <td>{{ $member->email }}</td>
                                <td>{{ $member->name_address_myan }}</td>
                                <td>{{ $member->ms_no_myan }}</td>
                                <td>{{ $member->ms_date_myan }}</td>
                                {{-- <td>{{ $member->phone_myan }}</td>
                                <td>{{ $member->fax_myan }}</td>
                                <td>{{ $member->nrc_myan }}</td>
                                <td>{{ $member->business_reg_myan }}</td>
                                <td>{{ $member->business_regdate_myan }}</td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
