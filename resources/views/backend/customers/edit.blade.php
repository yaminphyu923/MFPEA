@extends('backend.main')

@section('customer-active', 'active')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Edit Customer</b></h4>
                        <div class="justify-content-end">
                            <a href="{{ route('customers.index') }}">
                                <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                        class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a>
                        </div>
                    </div>
                </div>

                <form action="{{ route('customers.update', $customer->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="row mt-5">
                        <div class="col-sm-12 mb-2">
                            <div class="form-group row mx-2">
                                <label for="member_type_name" class="col-sm-2 offset-sm-1">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $customer->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="form-group row mx-2">
                                <label for="member_type_name" class="col-sm-2 offset-sm-1">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="{{ $customer->phone }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-2">
                            <div class="form-group row mx-2">
                                <label for="member_type_name" class="col-sm-2 offset-sm-1">Address</label>
                                <div class="col-sm-8">
                                    <input type="text" name="address" id="address" class="form-control"
                                        value="{{ $customer->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="form-group row mx-2">
                                <label for="member_type_name" class="col-sm-2 offset-sm-1">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ $customer->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-2">
                            <div class="form-group row mx-2">
                                <label for="company_name" class="col-sm-2 offset-sm-1">Company Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="company_name" id="company_name" class="form-control"
                                        value="{{ $customer->company_name }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-2">
                            <div class="form-group row mx-2">
                                <label for="product_name" class="col-sm-2 offset-sm-1">Product Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="product_name" id="product_name" class="form-control"
                                        value="{{ $customer->product_name }}">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 offset-sm-3">
                            <button type="submit" class="btn btn-md btn-success btn-theme btn-block">Update</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
