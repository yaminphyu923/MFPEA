@extends('backend.main')

@section('lab-active', 'active')

@section('fcar0500-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fcar0500.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>

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
                        <h4 class="text-center py-2"><b>Edit F-CAR-05-00</b></h4>
                    </div>

                    <form action="{{ route('fcar0500.update', $che->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control"
                                                value="{{ $che->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Report No.</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="report_no" class="form-control"
                                                value="{{ $che->report_no }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name" class="form-control"
                                                value="{{ $che->sample_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control"
                                                value="{{ $che->received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysis_date" class="form-control"
                                                value="{{ $che->analysis_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Issue Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="issue_date" class="form-control"
                                                value="{{ $che->issue_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Result</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="result" class="form-control"
                                                value="{{ $che->result }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_para" class="form-control"
                                                value="{{ $che->bod_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_method" class="form-control"
                                                value="{{ $che->bod_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_result" class="form-control"
                                                value="{{ $che->bod_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_unit" class="form-control"
                                                value="{{ $che->bod_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="bod_value" class="form-control"
                                                value="{{ $che->bod_value }}">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_para" class="form-control"
                                                value="{{ $che->cod_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_method" class="form-control"
                                                value="{{ $che->cod_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_result" class="form-control"
                                                value="{{ $che->cod_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_unit" class="form-control"
                                                value="{{ $che->cod_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="cod_value" class="form-control"
                                                value="{{ $che->cod_value }}">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_para" class="form-control"
                                                value="{{ $che->oil_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_method" class="form-control"
                                                value="{{ $che->oil_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_result" class="form-control"
                                                value="{{ $che->oil_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_unit" class="form-control"
                                                value="{{ $che->oil_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="oil_value" class="form-control"
                                                value="{{ $che->oil_value }}">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_para" class="form-control"
                                                value="{{ $che->ph_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_method" class="form-control"
                                                value="{{ $che->ph_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_result" class="form-control"
                                                value="{{ $che->ph_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_unit" class="form-control"
                                                value="{{ $che->ph_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ph_value" class="form-control"
                                                value="{{ $che->ph_value }}">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_para" class="form-control"
                                                value="{{ $che->nitrogen_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_method" class="form-control"
                                                value="{{ $che->nitrogen_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_result" class="form-control"
                                                value="{{ $che->nitrogen_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_unit" class="form-control"
                                                value="{{ $che->nitrogen_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="nitrogen_value" class="form-control"
                                                value="{{ $che->nitrogen_value }}">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_para" class="form-control"
                                                value="{{ $che->phos_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_method" class="form-control"
                                                value="{{ $che->phos_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_result" class="form-control"
                                                value="{{ $che->phos_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_unit" class="form-control"
                                                value="{{ $che->phos_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="phos_value" class="form-control"
                                                value="{{ $che->phos_value }}">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_para" class="form-control"
                                                value="{{ $che->solid_para }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_method" class="form-control"
                                                value="{{ $che->solid_method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_result" class="form-control"
                                                value="{{ $che->solid_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Unit</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_unit" class="form-control"
                                                value="{{ $che->solid_unit }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Guideline Value</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="solid_value" class="form-control"
                                                value="{{ $che->solid_value }}">
                                        </div>
                                    </div>
                                </div>

                                <hr>

                            </div>

                            <div class="row">

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="sign" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $che->name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="position" class="form-control"
                                                value="{{ $che->position }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked By</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check1" class="form-control"
                                                value="{{ $che->check1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked By</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check2" class="form-control"
                                                value="{{ $che->check2 }}">
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
