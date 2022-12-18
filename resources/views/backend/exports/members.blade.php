<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="datatable table table-stripped table-hover">
                    <thead class="btn-theme text-white">
                        <tr>
                            <th>Contact Person</th>
                            <th>M/S No(ID No)</th>
                            <th>M/S Date</th>
                            <th>Member Type</th>
                            <th>NRC</th>
                            <th>Business Registration</th>
                            <th>Business Registration Date</th>
                            <th>Category</th>
                            <th>Company Name/Address</th>
                            <th>Product Item</th>
                            <th>Telephone Number</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>အသင်းဝင်နာမည်နဲ့လိပ်စာ</th>
                            <th>အသင်းဝင်အမှတ်</th>
                            <th>အသင်းဝင် ရက်စွဲ</th>
                            <th>ဆက်သွယ်ရန်ဖုန်းနံပါတ်</th>
                            <th>ဖက်စ်</th>
                            <th>လျှောက်ထားသူ၏နိုင်ငံသားစီစစ်ရေးကဒ်ပြားအမှတ်</th>
                            <th>လုပ်ငန်းမှတ်ပုံတင်အမှတ်</th>
                            <th>လုပ်ငန်းမှတ်ပုံတင် ရက်စွဲ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->contact_person }}</td>
                                <td>{{ $member->ms_no }}</td>
                                <td>{{ date('d-M-Y', strtotime($member->ms_date)) }}</td>
                                <td>{{ $member->memberType != null ? $member->memberType->member_type_name : '' }}
                                </td>
                                <td>{{ $member->nrc }}</td>
                                <td>{{ $member->business_reg }}</td>
                                <td>{{ $member->business_regdate }}</td>
                                <td>{{ $member->category != null ? $member->category->name : '' }}
                                </td>
                                <td>{{ $member->company_name_address }}</td>
                                <td>{{ $member->product_item }}</td>
                                <td>{{ $member->phone_no }}</td>
                                <td>{{ $member->fax }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->name_address_myan }}</td>
                                <td>{{ $member->ms_no_myan }}</td>
                                <td>{{ $member->ms_date_myan }}</td>
                                <td>{{ $member->phone_myan }}</td>
                                <td>{{ $member->fax_myan }}</td>
                                <td>{{ $member->nrc_myan }}</td>
                                <td>{{ $member->business_reg_myan }}</td>
                                <td>{{ $member->business_regdate_myan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
