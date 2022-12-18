@extends('backend.main')

@section('lab-active', 'active')

@section('car0500-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('car0500.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-list"></i>
                                <b>List</b></button>
                        </a>

                        {{-- <a href="{{ route('hmm-method.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-clipboard-list"></i>
                                <b>Method</b></button>
                        </a> --}}

                        {{-- <a href="{{ route('hmm-test.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-clipboard-list"></i>
                                <b>Test Parameter</b></button>
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>F-Car-05-00</b></h4>
                    </div>

                    <form action="{{ route('car0500.store') }}" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control" value="C-">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Report No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="report_number" class="form-control"
                                                value="ARN-Chemical">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysis_date" class="form-control">
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
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="result" class="form-control"
                                                value="Heavy Metal and Mineral">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="test">
                                <div class="row test-row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="test_parameter[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="test_method[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="test_result[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Unit</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="unit[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Limit of Detection</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="detection_limit[]" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-2 my-0">
                                        <button type="button" class="btn btn-sm submit-button" onclick="add()"><i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="as_para" class="form-control" value="Arsenic (As)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="as_method" class="form-control" value="AAS">
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

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ca_para" class="form-control"
                                                value="Calcium (Ca)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="ca_method" class="form-control" value="AAS">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="ca_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="ca_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="ca_limit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="cd_para" class="form-control"
                                                value="Cadmium (Cd)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="cd_method" class="form-control" value="AAS">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cd_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cd_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cd_limit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="cr_para" class="form-control"
                                                value="Chromium (Cr)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="cr_method" class="form-control" value="AAS">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cr_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cr_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cr_limit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="cu_para" class="form-control"
                                                value="Copper (Cu)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="cu_method" class="form-control" value="AAS">
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

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fe_para" class="form-control" value="Iron (Fe)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="fe_method" class="form-control" value="AAS">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="fe_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="fe_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="fe_limit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="pb_para" class="form-control" value="Lead (Pb)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="pb_method" class="form-control" value="AAS">
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

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="mg_para" class="form-control"
                                                value="Magnesium (Mg)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="mg_method" class="form-control" value="AAS">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="mg_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="mg_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="mg_limit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="hg_para" class="form-control"
                                                value="Mercury (Hg)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="hg_method" class="form-control" value="AAS">
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

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="k_para" class="form-control"
                                                value="Potassium (K)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="k_method" class="form-control" value="AAS">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="k_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="k_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="k_limit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="se_para" class="form-control"
                                                value="Selenium (Se)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="se_method" class="form-control" value="AAS">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="se_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="se_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="se_limit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na_para" class="form-control"
                                                value="Sodium (Na)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="na_method" class="form-control" value="AAS">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="na_result" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="na_unit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="na_limit" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="zn_para" class="form-control" value="Zinc (Zn)">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="zn_method" class="form-control" value="AAS">
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

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remark</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remark" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sign</label>

                                        <div class="col-sm-8">
                                            <input type="file" name="sign" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="position" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Check by(1<sup>st</sup>)</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checkby1" class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Check by(2<sup>nd</sup>)</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checkby2" class="form-control"
                                                autocomplete="off">
                                        </div>
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
@endsection

@section('script')

    <script>
        var count = 1;

        function add() {
            var row = count + 1;
            count++;
            $.ajax({
                url: "{{ route('test-increase') }}",
                type: "GET",

                success: function(res) {
                    //console.log(res);

                    $(".test").append(
                        '<div class="mt-1 row test-row row_' + row + '">' +
                        // '<div class="col-sm-4">' +
                        // '<div class="form-group row">' +
                        // '<label for="" class="col-sm-6 text-md-end text-right">Test Parameter </label>' +

                        // '<div class="col-sm-6">' +
                        // '<select name="test_parameter[]" class="form-control" id="test_parameter' + row +
                        // '">' +
                        // '<option></option>' +
                        // '</select>' +
                        // '</div>' +
                        // '</div>' +
                        // '</div>' +

                        '<div class="col-sm-4">' +
                        '<div class="form-group row">' +
                        '<label for="" class="col-sm-6 text-md-end">Test Parameter </label>' +

                        '<div class="col-sm-6">' +
                        '<input type="text" name="test_parameter[]" class="form-control">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +

                        '<div class="col-sm-4">' +
                        '<div class="form-group row">' +
                        '<label for="" class="col-sm-6 text-md-end">Test Method </label>' +

                        '<div class="col-sm-6">' +
                        '<input type="text" name="test_method[]" class="form-control">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +

                        '<div class="col-sm-4">' +
                        '<div class="form-group row">' +
                        '<label for="" class="col-sm-6 text-md-end">Result </label>' +

                        '<div class="col-sm-6">' +
                        '<input type="text" name="test_result[]" class="form-control">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +

                        '<div class="col-sm-4">' +
                        '<div class="form-group row">' +
                        '<label for="" class="col-sm-6 text-md-end">Unit</label>' +

                        '<div class="col-sm-6">' +
                        '<input type="text" name="unit[]" class="form-control">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +

                        '<div class="col-sm-4">' +
                        '<div class="form-group row">' +
                        '<label for="" class="col-sm-6 text-md-end">Limit of Detection</label>' +

                        '<div class="col-sm-6">' +
                        '<input type="text" name="detection_limit[]" class="form-control">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-sm-1">' +
                        '<button type="button" onClick="remove(' + row +
                        ')" class="btn btn-danger btn-sm float-right"><i class="fas fa-times"></i></button>' +

                        '</div>' +
                        '</div>'
                    );

                    // $.each(res, function(key, value) {
                    //     //console.log(value);
                    //     // $("#test_parameters" + row).append('<option value="' + value.tests +
                    //     //     '">' + value
                    //     //     .tests + '</option>')

                    //     $("#test_para" + row).val(value.test);
                    // });

                    $("#test_parameter" + row).select2({
                        data: res.tests
                    });


                }
            })

        }

        function remove(row) {
            $(".row_" + row).remove();
            count--;
        }
    </script>

@endsection
