@extends('backend.main')

@section('lab-active', 'active')

@section('aa_fcar0501-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('aa_fcar0501.index') }}">
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
                        <h4 class="text-center py-2"><b>Edit F-CAR-05-01</b></h4>
                    </div>

                    <form action="{{ route('aa_fcar0501.update', $che->id) }}" method="POST" enctype="multipart/form-data">
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
                                            <input type="text" name="ace_para" class="form-control"
                                                value="{{ $che->ace_para }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ace_method" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ace_result" class="form-control"
                                                value="{{ $che->ace_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ethyl_para" class="form-control"
                                                value="{{ $che->ethyl_para }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ethyl_method" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ethyl_result" class="form-control"
                                                value="{{ $che->ethyl_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="methanol_para" class="form-control"
                                                value="{{ $che->methanol_para }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="methanol_method" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="methanol_result" class="form-control"
                                                value="{{ $che->methanol_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="propanol_para" class="form-control"
                                                value="{{ $che->propanol_para }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="propanol_method" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="propanol_result" class="form-control"
                                                value="{{ $che->propanol_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="iso_para" class="form-control"
                                                value="{{ $che->iso_para }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="iso_method" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="iso_result" class="form-control"
                                                value="{{ $che->iso_result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Parameter</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="methyl_para" class="form-control"
                                                value="{{ $che->methyl_para }}">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Test Method</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="methyl_method" class="form-control">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Result</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="methyl_result" class="form-control"
                                                value="{{ $che->methyl_result }}">
                                        </div>
                                    </div>
                                </div>
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
