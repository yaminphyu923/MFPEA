@extends('backend.main')

@section('lab-active', 'active')

@section('other-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Other Test Report</b></h4>
                        {{-- <a href="{{ route('other_tests.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><b>other Analysis Test
                                    Parameter</b></button>
                        </a> --}}

                        <a href="{{ route('others.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card bg-primary text-light">

                        <form action="{{ route('others.update', $other->id) }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Title</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="title" class="form-control"
                                                    value="{{ $other->title }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Company Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="company_name" class="form-control"
                                                    value="{{ $other->company_name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Address</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="address" class="form-control"
                                                    value="{{ $other->address }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Phone</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{ $other->phone }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Lab Received Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="lab_received_date" class="form-control"
                                                    value="{{ $other->lab_received_date }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Sample Number</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="sample_number" class="form-control"
                                                    value="{{ $other->sample_number }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Product Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="product_name" class="form-control"
                                                    value="{{ $other->product_name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Test Performed Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="test_performed_date" class="form-control"
                                                    value="{{ $other->test_performed_date }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Test Type</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="test_type" class="form-control"
                                                    value="{{ $other->test_type }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Issue Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="issue_date" class="form-control"
                                                    value="{{ $other->issue_date }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Results</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="results" class="form-control"
                                                    value="{{ $other->results }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="test">
                                        @foreach ($other_tests as $other_test)
                                            <input type="hidden" name="other_test_id[]" value="{{ $other_test->id }}">
                                            <div class="row">

                                                <div class="col-sm-4 my-0">
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-6">Test Parameter</label>

                                                        <div class="col-sm-6">
                                                            <input type="text" name="test_parameter[]"
                                                                class="form-control" autocomplete="off"
                                                                value="{{ $other_test->test_parameter }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 my-0">
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-5">Test Method</label>

                                                        <div class="col-sm-7">
                                                            <input type="text" name="test_method[]"
                                                                class="form-control" autocomplete="off"
                                                                value="{{ $other_test->test_method }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4 my-0">
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-5">Result</label>

                                                        <div class="col-sm-7">
                                                            <input type="text" name="result[]" class="form-control"
                                                                autocomplete="off" value="{{ $other_test->result }}">
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

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Method</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="method" class="form-control"
                                                    value="{{ $other->method }}">
                                            </div>
                                        </div>
                                    </div>

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
                                                    value="{{ $other->checked_name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="date" class="form-control"
                                                    value="{{ $other->date }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Position</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="position" class="form-control"
                                                    value="{{ $other->position }}">
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
    </div>
@endsection
