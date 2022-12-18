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
                            </div>
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
