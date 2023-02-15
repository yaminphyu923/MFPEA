@extends('backend.main')

@section('lab-active', 'active')

@section('heavy_metal-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Heavy Metals and Essential
                                Minerals Test Report</b></h4>
                        {{-- <a href="{{ route('heavy_metal_tests.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><b>heavy_metal Analysis Test
                                    Parameter</b></button>
                        </a> --}}

                        <a href="{{ route('heavy_metals.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-list"></i>
                                <b>List</b></button>
                        </a>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="card bg-primary text-light">

                        <form action="{{ route('heavy_metals.store') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Title</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Company Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="company_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Address</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="address" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Phone</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="phone" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Lab Received Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="lab_received_date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Sample Number</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="sample_number" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Product Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="product_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Test Performed Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="test_performed_date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Test Type</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="test_type" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Issue Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="issue_date" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Results</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="results" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="as_para" class="form-control"
                                                        value="Arsenic(As)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="as_method" class="form-control"
                                                        value="AAS">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="as_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Unit</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="as_unit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Limit of Detection</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="as_limit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="pb_para" class="form-control"
                                                        value="Lead(Pb)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="pb_method" class="form-control"
                                                        value="AAS">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="pb_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Unit</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="pb_unit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Limit of Detection</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="pb_limit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="cu_para" class="form-control"
                                                        value="Copper(Cu)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="cu_method" class="form-control"
                                                        value="AAS">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="cu_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Unit</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="cu_unit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Limit of Detection</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="cu_limit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="zn_para" class="form-control"
                                                        value="Zinc(Zn)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="zn_method" class="form-control"
                                                        value="AAS">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="zn_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Unit</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="zn_unit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Limit of Detection</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="zn_limit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Test Parameter</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="hg_para" class="form-control"
                                                        value="Mercury(Hg)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="hg_method" class="form-control"
                                                        value="AAS">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Result</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="hg_result" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-2 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Unit</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="hg_unit" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-4">Limit of Detection</label>

                                                <div class="col-sm-8">
                                                    <input type="text" name="hg_limit" class="form-control">
                                                </div>
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
                                                <input type="text" name="checked_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Position</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="position" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12 my-0 text-center">
                                            <button type="submit" class="btn btn-md w-25 submit-button"><i
                                                    class="fas fa-check-double"></i> <b>Submit</b></button>
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
