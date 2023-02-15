@extends('backend.main')

@section('member-active', 'active')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-3 card-button">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="mt-2"><b>Edit Member</b></h4>
                    <div class="justify-content-end">
                        <a href="{{ route('members.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <form action="{{ route('members.update', $member->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="row mt-5">
                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="name" class="control-label ml-3"><b>Name</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $member->name }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="father_name" class="control-label ml-3"><b>Father Name</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="father_name" id="father_name" class="form-control"
                                    value="{{ $member->father_name }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="birth_date" class="control-label ml-3"><b>Date of Birth</b></label>
                            <div class="col-sm-12">
                                <input type="date" name="birth_date" id="birth_date" class="form-control"
                                    value="{{ $member->birth_date }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="birth_place" class="control-label ml-3"><b>Place of Birth</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="birth_place" id="birth_place" class="form-control"
                                    value="{{ $member->birth_place }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="nationality" class="control-label ml-3"><b>Nationality</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="nationality" id="nationality" class="form-control"
                                    value="{{ $member->nationality }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="nrc" class="control-label ml-3"><b>NRC No</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="nrc" id="nrc" class="form-control"
                                    value="{{ $member->nrc }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="edu" class="control-label ml-3"><b>Education</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="edu" id="edu" class="form-control"
                                    value="{{ $member->edu }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="occupation" class="control-label ml-3"><b>Present
                                    Occupation</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="occupation" id="occupation" class="form-control"
                                    value="{{ $member->occupation }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="resident_no" class="control-label ml-3"><b>Resident
                                    No</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="resident_no" id="resident_no" class="form-control"
                                    value="{{ $member->resident_no }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="resident_street" class="control-label ml-3"><b>Resident
                                    Street</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="resident_street" id="resident_street" class="form-control"
                                    value="{{ $member->resident_street }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="resident_township" class="control-label ml-3"><b>Resident
                                    Township</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="resident_township" id="resident_township"
                                    class="form-control" value="{{ $member->resident_township }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="resident_city" class="control-label ml-3"><b>Resident
                                    City</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="resident_city" id="resident_city" class="form-control"
                                    value="{{ $member->resident_city }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="resident_state" class="control-label ml-3"><b>Resident
                                    State/Division</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="resident_state" id="resident_state" class="form-control"
                                    value="{{ $member->resident_state }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="postal_code" class="control-label ml-3"><b>Postal Code</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="postal_code" id="postal_code" class="form-control"
                                    value="{{ $member->postal_code }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="phone" class="control-label ml-3"><b>Phone</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ $member->phone }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="member_id" class="control-label ml-3"><b>Member ID</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="member_id" id="member_id" class="form-control"
                                    value="{{ $member->member_id }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="member_type" class="control-label mx-3"><b> Member Type </b></label>
                            <div class="col-sm-12 mb-3">
                                <select name="member_type_id" class="form-control myselect">
                                    <option>Select an option...</option>
                                    @foreach ($member_types as $member_type)
                                        <option value="{{ $member_type->id }}"
                                            @if ($member_type->id == $member->member_type_id) selected @endif>
                                            {{ $member_type->member_type_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="company_name" class="control-label ml-3"><b>Company Name</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="company_name" id="company_name" class="form-control"
                                    value="{{ $member->company_name }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="registration_no_date" class="control-label ml-3"><b>Registration No
                                    and
                                    Date</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="registration_no_date" id="registration_no_date"
                                    class="form-control" value="{{ $member->registration_no_date }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="business_name" class="control-label ml-3"><b>လုပ်ငန်းအမည်</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="business_name" id="business_name" class="form-control"
                                    value="{{ $member->business_name }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="business_no_date"
                                class="control-label ml-3"><b>လုပ်ငန်းမှတ်ပုံတင်အမှတ်နှင့်နေ့စွဲ</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="business_no_date" id="business_no_date" class="form-control"
                                    value="{{ $member->business_no_date }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="paid_capital" class="control-label ml-3"><b>Paid up
                                    Capital</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="paid_capital" id="paid_capital" class="form-control"
                                    value="{{ $member->paid_capital }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="employee_no" class="control-label ml-3"><b>Numbers of
                                    Employees</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="employee_no" id="employee_no" class="form-control"
                                    value="{{ $member->employee_no }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="contact_person" class="control-label ml-3"><b> Contact
                                    Person</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="contact_person" id="contact_person" class="form-control"
                                    value="{{ $member->contact_person }}">

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="designaion" class="control-label ml-3"><b>Designation</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="designaion" id="designaion" class="form-control"
                                    value="{{ $member->designaion }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="office_no" class="control-label ml-3"><b>Office Address
                                    No</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="office_no" id="office_no" class="form-control"
                                    value="{{ $member->office_no }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="office_street" class="control-label ml-3"><b>Office
                                    Street</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="office_street" id="office_street" class="form-control"
                                    value="{{ $member->office_street }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="office_ward" class="control-label ml-3"><b>Office
                                    Ward</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="office_ward" id="office_ward" class="form-control"
                                    value="{{ $member->office_ward }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="office_township" class="control-label ml-3"><b>Office
                                    Township</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="office_township" id="office_township" class="form-control"
                                    value="{{ $member->office_township }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="office_city" class="control-label ml-3"><b>Office
                                    City</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="office_city" id="office_city" class="form-control"
                                    value="{{ $member->office_city }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="office_state" class="control-label ml-3"><b>Office
                                    State/Division</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="office_state" id="office_state" class="form-control"
                                    value="{{ $member->office_state }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="office_phone" class="control-label ml-3"><b>Phone</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="office_phone" id="office_phone" class="form-control"
                                    value="{{ $member->office_phone }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="fax" class="control-label ml-3"><b>Fax No</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="fax" id="fax" class="form-control"
                                    value="{{ $member->fax }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="viber" class="control-label ml-3"><b>Viber</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="viber" id="viber" class="form-control"
                                    value="{{ $member->viber }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="website" class="control-label ml-3"><b>Website</b></label>
                            <div class="col-sm-12">
                                <input type="text" name="website" id="website" class="form-control"
                                    value="{{ $member->website }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            <label for="business_type_id" class="control-label ml-3"><b>Type of
                                    Business</b></label>
                            <div class="col-sm-12">
                                <select name="business_type_id" class="form-control myselect">
                                    <option>Select an option...</option>
                                    @foreach ($business_types as $business_type)
                                        <option value="{{ $business_type->id }}"
                                            @if ($business_type->id == $member->business_type_id) selected @endif>
                                            {{ $business_type->business_type_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 mb-2">
                        <div class="form-group row">
                            {{-- <label for=""></label> --}}
                            <div class="col-sm-12">
                                <textarea name="business_text" id="business_text" cols="30" rows="3" class="form-control">{{ $member->business_text }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-sm-6">
                        <div class="row">
                            {{-- <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="contact_person" class="control-label ml-3"><b> Contact
                                            Person</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="contact_person" id="contact_person" class="form-control"
                                            value="{{ $member->contact_person }}" required>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="ms_no" class="control-label ml-3"><b> M/S No(ID No)</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="ms_no" id="ms_no" class="form-control"
                                            value="{{ $member->ms_no }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="ms_date" class="control-label ml-3"><b>
                                            Date</b></label>
                                    <div class="col-sm-12">
                                        <input type="date" name="ms_date" id="ms_date" class="form-control"
                                            value="{{ $member->ms_date }}">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="member_type" class="control-label mx-3"><b> Member Type </b></label>
                                    <div class="col-sm-12 mb-3">
                                        <select name="member_type_id" id="" class="form-control myselect">
                                            <option>Select an option...</option>
                                            @foreach ($member_types as $member_type)
                                                <option value="{{ $member_type->id }}"
                                                    @if ($member_type->id == $member->member_type_id) selected @endif>
                                                    {{ $member_type->member_type_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="member_type" class="control-label mx-3"><b> Category </b></label>
                                    <div class="col-sm-12 mb-3">
                                        <select name="category_id" id="" class="form-control myselect">
                                            <option>Select an option...</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if ($category->id == $member->category_id) selected @endif>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="nrc" class="control-label ml-3"><b> NRC</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nrc" id="nrc" class="form-control"
                                            value="{{ $member->nrc }}">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="business_reg" class="control-label ml-3"><b>
                                            Business Registration</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="business_reg" id="business_reg" class="form-control"
                                            value="{{ $member->business_reg }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="business_regdate" class="control-label ml-3"><b>
                                            Date</b></label>
                                    <div class="col-sm-12">
                                        <input type="date" name="business_regdate" id="business_regdate"
                                            class="form-control" value="{{ $member->business_regdate }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="company_name_address" class="control-label ml-3"><b> Company
                                            Name/Address </b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="company_name_address" id="company_name_address"
                                            class="form-control" value="{{ $member->company_name_address }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="product_item" class="control-label ml-3"><b> Product Item</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="product_item" id="product_item" class="form-control"
                                            value="{{ $member->product_item }}">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="phone_no" class="control-label ml-3"><b> Phone Number</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="phone_no" id="phone_no" class="form-control"
                                            value="{{ $member->phone_no }}">
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="fax" class="control-label ml-3"><b> Fax</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="fax" id="fax" class="form-control"
                                            value="{{ $member->fax }}">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="email" class="control-label ml-3"><b> Email</b></label>
                                    <div class="col-sm-12">
                                        <input type="email" name="email" id="email" class="form-control"
                                            value="{{ $member->email }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="entrance_fee" class="control-label ml-3"><b>
                                            Entrance Fee</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="entrance_fee" id="entrance_fee" class="form-control"
                                            value="{{ $member->entrance_fee }}">
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

                            <div class="col-sm-12 my-3">
                                @if ($member->photo)
                                    <img src="{{ asset('photos/members/' . $member->photo) }}" alt=""
                                        style="width:150px;height:150px;">
                                @else
                                    <img src="{{ asset('photos/icons/user.png') }}" alt=""
                                        style="width:150px;height:150px;">
                                @endif
                            </div>

                            @foreach ($annual_fees as $annual_fee)
                                <input type="hidden" name="annual_fee_id[]" value="{{ $annual_fee->id }}">
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="annual_fee" class="control-label ml-3"><b> Annual Fee</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="annual_fee[]" id="annual_fee"
                                                class="form-control" value="{{ $annual_fee->annual_fee }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="exp_date" class="control-label ml-3"><b> Expired Date</b></label>
                                        <div class="col-sm-12">
                                            <input type="date" name="exp_date[]" id="exp_date" class="form-control"
                                                value="{{ $annual_fee->exp_date }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{ $annual_fees->links('pagination::bootstrap-4') }}

                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-md btn-info btn-theme">Update</button>
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
                                            class="form-control" value="{{ $member->name_address_myan }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="ms_no_myan" class="control-label ml-3"><b>
                                            အသင်းဝင်အမှတ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="ms_no_myan" id="ms_no_myan" class="form-control"
                                            value="{{ $member->ms_no_myan }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="ms_date_myan" class="control-label ml-3"><b>
                                            ရက်စွဲ</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="ms_date_myan" id="ms_date_myan" class="form-control"
                                            placeholder="ရက်-လ-နှစ်" value="{{ $member->ms_date_myan }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="phone_myan" class="control-label ml-3"><b>
                                            ဆက်သွယ်ရန်ဖုန်းနံပါတ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="phone_myan" id="phone_myan" class="form-control"
                                            value="{{ $member->phone_myan }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="fax_myan" class="control-label ml-3"><b>
                                            ဖက်စ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="fax_myan" id="fax_myan" class="form-control"
                                            value="{{ $member->fax_myan }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-2">
                                <div class="form-group row">
                                    <label for="nrc_myan" class="control-label ml-3"><b>
                                            လျှောက်ထားသူ၏နိုင်ငံသားစီစစ်ရေးကဒ်ပြားအမှတ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="nrc_myan" id="nrc_myan" class="form-control"
                                            value="{{ $member->nrc_myan }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="business_reg_myan" class="control-label ml-3"><b>
                                            လုပ်ငန်းမှတ်ပုံတင်အမှတ်</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="business_reg_myan" id="business_reg_myan"
                                            class="form-control" value="{{ $member->business_reg_myan }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 mb-2">
                                <div class="form-group row">
                                    <label for="business_regdate_myan" class="control-label ml-3"><b>
                                            ရက်စွဲ</b></label>
                                    <div class="col-sm-12">
                                        <input type="text" name="business_regdate_myan" id="business_regdate_myan"
                                            class="form-control" placeholder="ရက်-လ-နှစ်"
                                            value="{{ $member->business_regdate_myan }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
