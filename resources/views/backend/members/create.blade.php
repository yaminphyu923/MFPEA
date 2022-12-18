@extends('backend.main')

@section('member-active', 'active')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3 card-button">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2"><b>Create Member</b></h4>
                    <div class="justify-content-end">
                        <a href="{{ route('members.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <form action="{{ route('members.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
                @csrf

                <div class="row mt-5">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="contact_person" class="control-label ml-3"><b> Contact
                                            Person</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="contact_person" id="contact_person" class="form-control"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="ms_no" class="control-label ml-3"><b> M/S No(ID No)</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="ms_no" id="ms_no" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="ms_date" class="control-label ml-3"><b>
                                            Date</b></label>
                                    <div class="col-sm-12">
                                        <input type="date" name="ms_date" id="ms_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="member_type" class="control-label mx-3"><b> Member Type </b></label>
                                    <div class="col-sm-12 mb-3">
                                        <select name="member_type_id" id="" class="form-control myselect">
                                            <option>Select an option...</option>
                                            @foreach ($member_types as $member_type)
                                                <option value="{{ $member_type->id }}">
                                                    {{ $member_type->member_type_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="member_type" class="control-label mx-3"><b> Category </b></label>
                                    <div class="col-sm-12 mb-3">
                                        <select name="category_id" id="" class="form-control myselect">
                                            <option>Select an option...</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="nrc" class="control-label ml-3"><b> NRC</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nrc" id="nrc" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="business_reg" class="control-label ml-3"><b>
                                            Business Registration</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="business_reg" id="business_reg" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="business_regdate" class="control-label ml-3"><b>
                                            Date</b></label>
                                    <div class="col-sm-12">
                                        <input type="date" name="business_regdate" id="business_regdate"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="company_name_address" class="control-label ml-3"><b> Company
                                            Name/Address</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="company_name_address" id="company_name_address"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="product_item" class="control-label ml-3"><b> Product Item</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="product_item" id="product_item"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="phone_no" class="control-label ml-3"><b> Phone Number</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="phone_no" id="phone_no" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="fax" class="control-label ml-3"><b> Fax</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="fax" id="fax" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="email" class="control-label ml-3"><b> Email</b></label>
                                    <div class="col-sm-12">
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="entrance_fee" class="control-label ml-3"><b>Entrance Fee</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="entrance_fee" id="entrance_fee"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="photo" class="control-label ml-3"><b> Photo Upload</b></label>
                                    <div class="col-sm-12">
                                        <input type="file" name="photo" id="photo" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="name_address_myan" class="control-label ml-3"><b>
                                            အသင်းဝင်နာမည်နဲ့လိပ်စာ</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="name_address_myan" id="name_address_myan"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="ms_no_myan" class="control-label ml-3"><b>
                                            အသင်းဝင်အမှတ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="ms_no_myan" id="ms_no_myan" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="ms_date_myan" class="control-label ml-3"><b>
                                            ရက်စွဲ</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="ms_date_myan" id="ms_date_myan" class="form-control"
                                            placeholder="ရက်-လ-နှစ်">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="phone_myan" class="control-label ml-3"><b>
                                            ဆက်သွယ်ရန်ဖုန်းနံပါတ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="phone_myan" id="phone_myan" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="fax_myan" class="control-label ml-3"><b>
                                            ဖက်စ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="fax_myan" id="fax_myan" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="nrc_myan" class="control-label ml-3"><b>
                                            လျှောက်ထားသူ၏နိုင်ငံသားစီစစ်ရေးကဒ်ပြားအမှတ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nrc_myan" id="nrc_myan" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="business_reg_myan" class="control-label ml-3"><b>
                                            လုပ်ငန်းမှတ်ပုံတင်အမှတ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="business_reg_myan" id="business_reg_myan"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="business_regdate_myan" class="control-label ml-3"><b>
                                            ရက်စွဲ</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="business_regdate_myan" id="business_regdate_myan"
                                            class="form-control" placeholder="ရက်-လ-နှစ်">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" name="status" value="1">

                <div class="member-fee">
                    <div class="row">
                        <div class="col-sm-4 mb-2">
                            <div class="form-group row">
                                <label for="annual_fee" class="control-label ml-3"><b> Annual Fee</b></label>
                                <div class="col-sm-12">
                                    <input type="text" name="annual_fee[]" id="annual_fee" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 mb-2">
                            <div class="form-group row">
                                <label for="exp_date" class="control-label ml-3"><b> Expired Date</b></label>
                                <div class="col-sm-12">
                                    <input type="date" name="exp_date[]" id="exp_date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 mt-4">
                            <button type="button" class="btn btn-sm btn-primary btn-theme" onclick="plus()"><i
                                    class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <button type="submit" class="btn btn-md btn-primary btn-theme w-50">Save</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>
        var count = 1;

        function plus() {
            var row = count + 1;
            count++;

            $('.member-fee').append(
                '<div class="mt-1 row row_' + row + '">' +
                '<div class="col-sm-4">' +
                '<div class="form-group">' +
                '<label for="annual_fee" class="control-label ml-3"><b> Annual Fee</b></label>' +
                '<div class="col-sm-12">' +
                '<input type="text" name="annual_fee[]" id="annual_fee_' + row + '" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="col-sm-4">' +
                '<div class="form-group">' +
                '<label for="exp_date" class="control-label ml-3"><b> Expired Date</b></label>' +
                '<div class="col-sm-12">' +
                '<input type="date" name="exp_date[]" id="exp_date_' + row + '" class="form-control">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="col-sm-2 mt-4">' +
                '<button type="button" onClick="remove(' + row +
                ')" class="btn btn-danger btn-md"><i class="fas fa-times"></i></button>' +
                '</div>' +
                '</div>'
            );
        }

        function remove(row) {
            $('.row_' + row).remove();
            count--;
        }
    </script>
@endsection
