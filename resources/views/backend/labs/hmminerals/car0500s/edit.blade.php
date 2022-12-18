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
                        <h4 class="text-center py-2"><b>Edit F-Car-05-00</b></h4>
                    </div>

                    <form action="{{ route('car0500.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control" autocomplete="off"
                                                value="{{ $car->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Report No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="report_number" class="form-control"
                                                autocomplete="off" value="{{ $car->report_number }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name" class="form-control" autocomplete="off"
                                                value="{{ $car->sample_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control"
                                                autocomplete="off" value="{{ $car->received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysis_date" class="form-control"
                                                autocomplete="off" value="{{ $car->analysis_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Issue Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="issue_date" class="form-control" autocomplete="off"
                                                value="{{ $car->issue_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="result" class="form-control" autocomplete="off"
                                                value="{{ $car->result }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="test">

                                @foreach ($car_tests as $car_test)
                                    <div class="row test-row">
                                        <input type="hidden" name="car_test_id[]" value="{{ $car_test->id }}">

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-6">Test Parameter</label>

                                                <div class="col-sm-6">
                                                    <input type="text" name="test_parameter[]" class="form-control"
                                                        autocomplete="off" value="{{ $car_test->test_parameter }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="test_method[]" class="form-control"
                                                        autocomplete="off" value="{{ $car_test->test_method }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Result</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="test_result[]" class="form-control"
                                                        autocomplete="off" value="{{ $car_test->test_result }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-6">Unit</label>

                                                <div class="col-sm-6">
                                                    <input type="text" name="unit[]" class="form-control"
                                                        autocomplete="off" value="{{ $car_test->unit }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Limit of Detection</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="detection_limit[]" class="form-control"
                                                        autocomplete="off" value="{{ $car_test->detection_limit }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach

                            </div> --}}

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="as_para" class="form-control"
                                                value="{{ $car->as_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="as_method" class="form-control"
                                                value="{{ $car->as_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="as_result" class="form-control"
                                                value="{{ $car->as_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="as_unit" class="form-control"
                                                value="{{ $car->as_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="as_limit" class="form-control"
                                                value="{{ $car->as_limit }}">
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
                                                value="{{ $car->ca_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="ca_method" class="form-control"
                                                value="{{ $car->ca_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="ca_result" class="form-control"
                                                value="{{ $car->ca_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="ca_unit" class="form-control"
                                                value="{{ $car->ca_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="ca_limit" class="form-control"
                                                value="{{ $car->ca_limit }}">
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
                                                value="{{ $car->cd_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="cd_method" class="form-control"
                                                value="{{ $car->cd_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cd_result" class="form-control"
                                                value="{{ $car->cd_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cd_unit" class="form-control"
                                                value="{{ $car->cd_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cd_limit" class="form-control"
                                                value="{{ $car->cd_limit }}">
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
                                                value="{{ $car->cr_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="cr_method" class="form-control"
                                                value="{{ $car->cr_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cr_result" class="form-control"
                                                value="{{ $car->cr_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cr_unit" class="form-control"
                                                value="{{ $car->cr_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cr_limit" class="form-control"
                                                value="{{ $car->cr_limit }}">
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
                                                value="{{ $car->cu_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="cu_method" class="form-control"
                                                value="{{ $car->cu_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cu_result" class="form-control"
                                                value="{{ $car->cu_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cu_unit" class="form-control"
                                                value="{{ $car->cu_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="cu_limit" class="form-control"
                                                value="{{ $car->cu_limit }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fe_para" class="form-control"
                                                value="{{ $car->fe_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="fe_method" class="form-control"
                                                value="{{ $car->fe_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="fe_result" class="form-control"
                                                value="{{ $car->fe_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="fe_unit" class="form-control"
                                                value="{{ $car->fe_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="fe_limit" class="form-control"
                                                value="{{ $car->fe_limit }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="pb_para" class="form-control"
                                                value="{{ $car->pb_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="pb_method" class="form-control"
                                                value="{{ $car->pb_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="pb_result" class="form-control"
                                                value="{{ $car->pb_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="pb_unit" class="form-control"
                                                value="{{ $car->pb_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="pb_limit" class="form-control"
                                                value="{{ $car->pb_limit }}">
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
                                                value="{{ $car->mg_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="mg_method" class="form-control"
                                                value="{{ $car->mg_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="mg_result" class="form-control"
                                                value="{{ $car->mg_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="mg_unit" class="form-control"
                                                value="{{ $car->mg_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="mg_limit" class="form-control"
                                                value="{{ $car->mg_limit }}">
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
                                                value="{{ $car->hg_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="hg_method" class="form-control"
                                                value="{{ $car->hg_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="hg_result" class="form-control"
                                                value="{{ $car->hg_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="hg_unit" class="form-control"
                                                value="{{ $car->hg_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="hg_limit" class="form-control"
                                                value="{{ $car->hg_limit }}">
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
                                                value="{{ $car->k_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="k_method" class="form-control"
                                                value="{{ $car->k_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="k_result" class="form-control"
                                                value="{{ $car->k_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="k_unit" class="form-control"
                                                value="{{ $car->k_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="k_limit" class="form-control"
                                                value="{{ $car->k_limit }}">
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
                                                value="{{ $car->se_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="se_method" class="form-control"
                                                value="{{ $car->se_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="se_result" class="form-control"
                                                value="{{ $car->se_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="se_unit" class="form-control"
                                                value="{{ $car->se_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="se_limit" class="form-control"
                                                value="{{ $car->se_limit }}">
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
                                                value="{{ $car->na_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="na_method" class="form-control"
                                                value="{{ $car->na_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="na_result" class="form-control"
                                                value="{{ $car->na_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="na_unit" class="form-control"
                                                value="{{ $car->na_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="na_limit" class="form-control"
                                                value="{{ $car->na_limit }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row test-row">

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="zn_para" class="form-control"
                                                value="{{ $car->zn_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Test Method</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="zn_method" class="form-control"
                                                value="{{ $car->zn_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="zn_result" class="form-control"
                                                value="{{ $car->zn_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="zn_unit" class="form-control"
                                                value="{{ $car->zn_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Limit of Detection</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="zn_limit" class="form-control"
                                                value="{{ $car->zn_limit }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remark</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remark" class="form-control" autocomplete="off"
                                                value="{{ $car->remark }}">
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
                                            <input type="text" name="name" class="form-control" autocomplete="off"
                                                value="{{ $car->name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="position" class="form-control"
                                                autocomplete="off" value="{{ $car->position }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Check by(1<sup>st</sup>)</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checkby1" class="form-control"
                                                autocomplete="off" value="{{ $car->checkby1 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Check by(2<sup>nd</sup>)</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checkby2" class="form-control"
                                                autocomplete="off" value="{{ $car->checkby2 }}">
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

                    // let data = [];

                    // res.tests.forEach(function(value, key) {
                    //     //console.log(value);
                    //     data.push({
                    //         id: value.id,
                    //         test: value.test,
                    //     });
                    // });

                    // console.log(data);
                    $(".test").append(
                        '<div class="mt-1 row row_' + row + '">' +
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

                        '<div class="col-sm-3">' +
                        '<div class="form-group row">' +
                        '<label for="" class="col-sm-6 text-md-end">Test Method </label>' +

                        '<div class="col-sm-6">' +
                        '<input type="text" name="test_method[]" class="form-control">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +

                        '<div class="col-sm-3">' +
                        '<div class="form-group row">' +
                        '<label for="" class="col-sm-6 text-md-end">Result </label>' +

                        '<div class="col-sm-6">' +
                        '<input type="text" name="test_result[]" class="form-control">' +
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
