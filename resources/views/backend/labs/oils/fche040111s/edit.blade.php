@extends('backend.main')

@section('lab-active', 'active')

@section('fche040111-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche040111.index') }}">
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
                        <h4 class="text-center py-2"><b>Edit FIDSL-Che-04-01/11</b></h4>
                    </div>

                    <form action="{{ route('fche040111.update', $che->id) }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="" class="col-sm-4">Date Initiated for Analysis</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="initiated_date" class="form-control"
                                                value="{{ $che->initiated_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Reported Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="reported_date" class="form-control"
                                                value="{{ $che->reported_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Method</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="method" class="form-control"
                                                value="{{ $che->method }}">
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="sample" class="form-control"
                                                value="{{ $che->sample }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="sample_test1" class="form-control"
                                                value="{{ $che->sample_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="sample_test2" class="form-control"
                                                value="{{ $che->sample_test2 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="koh" class="form-control"
                                                value="{{ $che->koh }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="koh_test1" class="form-control"
                                                value="{{ $che->koh_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="koh_test2" class="form-control"
                                                value="{{ $che->koh_test2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="water" class="form-control"
                                                value="{{ $che->water }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="water_test1" class="form-control"
                                                value="{{ $che->water_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="water_test2" class="form-control"
                                                value="{{ $che->water_test2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="petro" class="form-control"
                                                value="{{ $che->petro }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="petro_test1" class="form-control"
                                                value="{{ $che->petro_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="petro_test2" class="form-control"
                                                value="{{ $che->petro_test2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ethanol" class="form-control"
                                                value="{{ $che->ethanol }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ethanol_test1" class="form-control"
                                                value="{{ $che->ethanol_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="ethanol_test2" class="form-control"
                                                value="{{ $che->ethanol_test2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="flask" class="form-control"
                                                value="{{ $che->flask }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="flask_test1" class="form-control"
                                                value="{{ $che->flask_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="flask_test2" class="form-control"
                                                value="{{ $che->flask_test2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="flask_residue" class="form-control"
                                                value="{{ $che->flask_residue }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="flask_residue_test1" class="form-control"
                                                value="{{ $che->flask_residue_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="flask_residue_test2" class="form-control"
                                                value="{{ $che->flask_residue_test2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="residue" class="form-control"
                                                value="{{ $che->residue }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="residue_test1" class="form-control"
                                                value="{{ $che->residue_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="residue_test2" class="form-control"
                                                value="{{ $che->residue_test2 }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="unsap_cal" class="form-control"
                                                value="{{ $che->unsap_cal }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="unsap_cal_test1" class="form-control"
                                                value="{{ $che->unsap_cal_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="unsap_cal_test2" class="form-control"
                                                value="{{ $che->unsap_cal_test2 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="result" class="form-control"
                                                value="{{ $che->result }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="result_test1" class="form-control"
                                                value="{{ $che->result_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="result_test2" class="form-control"
                                                value="{{ $che->result_test2 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">Data</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="unsap" class="form-control"
                                                value="{{ $che->unsap }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">1st Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="unsap_test1" class="form-control"
                                                value="{{ $che->unsap_test1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3">2nd Test</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="unsap_test2" class="form-control"
                                                value="{{ $che->unsap_test2 }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Analysed by Sign </label>

                                            <div class="col-sm-8">
                                                <input type="file" name="analysed_sign" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Analysed by Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="analysed_date" class="form-control"
                                                    value="{{ $che->analysed_date }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Analysed by Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="analysed_name" class="form-control"
                                                    value="{{ $che->analysed_name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Checked by Sign </label>

                                            <div class="col-sm-8">
                                                <input type="file" name="checked_sign" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Checked by Date</label>

                                            <div class="col-sm-8">
                                                <input type="date" name="checked_date" class="form-control"
                                                    value="{{ $che->checked_date }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-4">Checked by Name</label>

                                            <div class="col-sm-8">
                                                <input type="text" name="checked_name" class="form-control"
                                                    value="{{ $che->checked_name }}">
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
