@extends('backend.main')

@section('lab-active', 'active')

@section('ad01351-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('ad01351.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>

                        {{-- <a href="{{ route('car0501-test.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-clipboard-list"></i> <b>Test
                                    Parameter</b></button>
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Edit FIDSL-Ad-06-03-01351/22</b></h4>
                    </div>

                    <form action="{{ route('ad01351.update', $ad->id) }}" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Company Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="company_name" class="form-control"
                                                value="{{ $ad->company_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Address</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="address" class="form-control"
                                                value="{{ $ad->address }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Customer Name</label>

                                        <div class="col-sm-8">
                                            <select name="customer_id" class="form-control myselect">
                                                <option>Select an option...</option>
                                                @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}"
                                                        @if ($customer->id == $ad->customer_id) selected @endif>
                                                        {{ $customer->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Phone</label>

                                        <div class="col-sm-8">
                                            <input type="number" name="phone" class="form-control"
                                                value="{{ $ad->phone }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Lab Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="lab_received_date" class="form-control"
                                                value="{{ $ad->lab_received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_number" class="form-control"
                                                value="{{ $ad->sample_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Product Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="product_name" class="form-control"
                                                value="{{ $ad->product_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Code No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="code_no" class="form-control"
                                                value="{{ $ad->code_no }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">MFD</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="mfd" class="form-control"
                                                value="{{ $ad->mfd }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Exp</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="exp" class="form-control"
                                                value="{{ $ad->exp }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Can Size</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="can_size" class="form-control"
                                                value="{{ $ad->can_size }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Test Performed Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="test_performed_date" class="form-control"
                                                value="{{ $ad->test_performed_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Test Type</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="test_type" class="form-control"
                                                value="{{ $ad->test_type }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Issue Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="issue_date" class="form-control"
                                                value="{{ $ad->issue_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Results</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="results" class="form-control"
                                                value="{{ $ad->results }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Method</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="method" class="form-control"
                                                value="{{ $ad->method }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="test">
                                @foreach ($ad_tests as $ad_test)
                                    <input type="hidden" name="ad_test_id[]" value="{{ $ad_test->id }}">
                                    <div class="row">

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-6">Test Parameter</label>

                                                <div class="col-sm-6">
                                                    <input type="text" name="test_parameter[]" class="form-control"
                                                        autocomplete="off" value="{{ $ad_test->test_parameter }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="test_method[]" class="form-control"
                                                        autocomplete="off" value="{{ $ad_test->test_method }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Result</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="result[]" class="form-control"
                                                        autocomplete="off" value="{{ $ad_test->result }}">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="col-sm-2 my-0">
                                            <button type="button" class="btn btn-sm submit-button" onclick="add()"><i
                                                    class="fas fa-plus"></i></button>
                                        </div> --}}
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sign</label>

                                        <div class="col-sm-8">
                                            <input type="file" name="sign" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_name" class="form-control"
                                                value="{{ $ad->checked_name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12 my-0 text-center">
                                    <button type="submit" class="btn btn-md w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Update</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
