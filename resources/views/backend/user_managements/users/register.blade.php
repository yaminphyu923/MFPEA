@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card login-card">
                    <div class="card-header">
                        <h4 class="text-center my-3"><b>{{ __('Register') }}</b></h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('registerWithMember') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <input type="hidden" name="roles[]" value="User">

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary btn-fill">
                                        Fill Member
                                    </button>
                                </div>
                            </div>

                            <div class="row mb-0 btn-hide">
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="father_name" class="control-label ml-3"><b>Father Name</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="father_name" id="father_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="birth_date" class="control-label ml-3"><b>Date of Birth</b></label>
                                        <div class="col-sm-12">
                                            <input type="date" name="birth_date" id="birth_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="birth_place" class="control-label ml-3"><b>Place of Birth</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="birth_place" id="birth_place" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="nationality" class="control-label ml-3"><b>Nationality</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="nationality" id="nationality" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="nrc" class="control-label ml-3"><b>NRC No</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="nrc" id="nrc" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="edu" class="control-label ml-3"><b>Education</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="edu" id="edu" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="occupation" class="control-label ml-3"><b>Present
                                                Occupation</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="occupation" id="occupation"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="resident_no" class="control-label ml-3"><b>Resident
                                                No</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="resident_no" id="resident_no"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="resident_street" class="control-label ml-3"><b>Resident
                                                Street</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="resident_street" id="resident_street"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="resident_township" class="control-label ml-3"><b>Resident
                                                Township</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="resident_township" id="resident_township"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="resident_city" class="control-label ml-3"><b>Resident
                                                City</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="resident_city" id="resident_city"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="resident_state" class="control-label ml-3"><b>Resident
                                                State/Division</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="resident_state" id="resident_state"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="postal_code" class="control-label ml-3"><b>Postal Code</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="postal_code" id="postal_code"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="phone" class="control-label ml-3"><b>Phone</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="phone" id="phone" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="member_id" class="control-label ml-3"><b>Member ID</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="member_id" id="member_id" class="form-control">
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
                                                    <option value="{{ $member_type->id }}">
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
                                            <input type="text" name="company_name" id="company_name"
                                                class="form-control">
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
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="business_name" class="control-label ml-3"><b>လုပ်ငန်းအမည်</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="business_name" id="business_name"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="business_no_date"
                                            class="control-label ml-3"><b>လုပ်ငန်းမှတ်ပုံတင်အမှတ်နှင့်နေ့စွဲ</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="business_no_date" id="business_no_date"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="paid_capital" class="control-label ml-3"><b>Paid up
                                                Capital</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="paid_capital" id="paid_capital"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="employee_no" class="control-label ml-3"><b>Numbers of
                                                Employees</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="employee_no" id="employee_no"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="contact_person" class="control-label ml-3"><b> Contact
                                                Person</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="contact_person" id="contact_person"
                                                class="form-control">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="designaion" class="control-label ml-3"><b>Designation</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="designaion" id="designaion"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="office_no" class="control-label ml-3"><b>Office Address
                                                No</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_no" id="office_no" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="office_street" class="control-label ml-3"><b>Office
                                                Street</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_street" id="office_street"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="office_ward" class="control-label ml-3"><b>Office
                                                Ward</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_ward" id="office_ward"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="office_township" class="control-label ml-3"><b>Office
                                                Township</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_township" id="office_township"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="office_city" class="control-label ml-3"><b>Office
                                                City</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_city" id="office_city"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="office_state" class="control-label ml-3"><b>Office
                                                State/Division</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_state" id="office_state"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="office_phone" class="control-label ml-3"><b>Phone</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="office_phone" id="office_phone"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="fax" class="control-label ml-3"><b>Fax No</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="fax" id="fax" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="viber" class="control-label ml-3"><b>Viber</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="viber" id="viber" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="website" class="control-label ml-3"><b>Website</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="website" id="website" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="business_type_id" class="control-label ml-3"><b>Type of
                                                Business</b></label>
                                        <div class="col-sm-12 mb-3">
                                            <select name="business_type_id" class="form-control myselect">
                                                <option>Select an option...</option>
                                                @foreach ($business_types as $business_type)
                                                    <option value="{{ $business_type->id }}">
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
                                            <textarea name="business_text" id="business_text" cols="30" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="status" value="0">

                                <div class="col-md-6 offset-md-3 mt-4">
                                    <button type="submit" class="btn btn-primary btn-fill w-100 btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                            </div>

                            {{-- <div class="row mb-0 btn-hide">
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="contact_person" class="control-label ml-3"><b> Contact
                                                Person</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="contact_person" id="contact_person"
                                                class="form-control">

                                            @error('contact_person')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
                                        <label for="member_type" class="control-label mx-3"><b> Member Type </b></label>
                                        <div class="col-sm-12 mb-3">
                                            <select name="member_type_id" class="form-control myselect">
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
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="member_type" class="control-label mx-3"><b> Category </b></label>
                                        <div class="col-sm-12 mb-3">
                                            <select name="category_id" class="form-control myselect">
                                                <option>Select an option...</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="company_name_address" class="control-label ml-3"><b> Company
                                                Name/Address</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="company_name_address" id="company_name_address"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="product_item" class="control-label ml-3"><b> Product Item</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="product_item" id="product_item"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="phone_no" class="control-label ml-3"><b> Phone Number</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="phone_no" id="phone_no" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="fax" class="control-label ml-3"><b> Fax</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="fax" id="fax" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="entrance_fee" class="control-label ml-3"><b>Entrance Fee</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="entrance_fee" id="entrance_fee"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="annual_fee" class="control-label ml-3"><b> Annual Fee</b></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="annual_fee[]" id="annual_fee"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="exp_date" class="control-label ml-3"><b> Expired Date</b></label>
                                        <div class="col-sm-12">
                                            <input type="date" name="exp_date[]" id="exp_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="form-group row">
                                        <label for="photo" class="control-label ml-3"><b> Photo Upload</b></label>
                                        <div class="col-sm-12">
                                            <input type="file" name="photo" id="photo" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="status" value="0">

                                <div class="col-md-6 offset-md-3 mt-4">
                                    <button type="submit" class="btn btn-primary btn-fill w-100 btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var btnFill = document.querySelector('.btn-fill');
        var btnHide = document.querySelector('.btn-hide');

        btnFill.addEventListener('click', function() {
            btnHide.classList.toggle('btn-hide');
        })
    </script>
@endsection
