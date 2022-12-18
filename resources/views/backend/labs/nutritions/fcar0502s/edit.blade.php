@extends('backend.main')

@section('lab-active', 'active')

@section('fcar0502-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">

                        <a href="{{ route('fcar0502.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Edit F-CAR-05-02</b></h4>
                    </div>

                    <form action="{{ route('fcar0502.update', $fcar->id) }}" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control"
                                                value="{{ $fcar->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Report No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="report_no" class="form-control"
                                                value="{{ $fcar->report_no }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name" class="form-control"
                                                value="{{ $fcar->sample_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control"
                                                value="{{ $fcar->received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysis Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysis_date" class="form-control"
                                                value="{{ $fcar->analysis_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Issue Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="issue_date" class="form-control"
                                                value="{{ $fcar->issue_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Results</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="results" class="form-control"
                                                value="{{ $fcar->results }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="moisture" class="form-control"
                                                value="{{ $fcar->moisture }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="moisture_ref" class="form-control"
                                                value="{{ $fcar->moisture_ref }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="moisture_result_g" class="form-control"
                                                value="{{ $fcar->moisture_result_g }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="moisture_result_ml" class="form-control"
                                                value="{{ $fcar->moisture_result_ml }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ash" class="form-control"
                                                value="{{ $fcar->ash }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ash_ref" class="form-control"
                                                value="{{ $fcar->ash_ref }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ash_result_g" class="form-control"
                                                value="{{ $fcar->ash_result_g }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="ash_result_ml" class="form-control"
                                                value="{{ $fcar->ash_result_ml }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="protein" class="form-control"
                                                value="{{ $fcar->protein }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="protein_ref" class="form-control"
                                                value="{{ $fcar->protein_ref }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="protein_result_g" class="form-control"
                                                value="{{ $fcar->protein_result_g }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="protein_result_ml" class="form-control"
                                                value="{{ $fcar->protein_result_ml }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fiber" class="form-control"
                                                value="{{ $fcar->fiber }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fiber_ref" class="form-control"
                                                value="{{ $fcar->fiber_ref }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fiber_result_g" class="form-control"
                                                value="{{ $fcar->fiber_result_g }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fiber_result_ml" class="form-control"
                                                value="{{ $fcar->fiber_result_ml }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fat" class="form-control"
                                                value="{{ $fcar->fat }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fat_ref" class="form-control"
                                                value="{{ $fcar->fat_ref }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fat_result_g" class="form-control"
                                                value="{{ $fcar->fat_result_g }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="fat_result_ml" class="form-control"
                                                value="{{ $fcar->fat_result_ml }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="carbo" class="form-control"
                                                value="{{ $fcar->carbo }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="carbo_ref" class="form-control"
                                                value="{{ $fcar->carbo_ref }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="carbo_result_g" class="form-control"
                                                value="{{ $fcar->carbo_result_g }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="carbo_result_ml" class="form-control"
                                                value="{{ $fcar->carbo_result_ml }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="energy" class="form-control"
                                                value="{{ $fcar->energy }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="energy_ref" class="form-control"
                                                value="{{ $fcar->energy_ref }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="energy_result_g" class="form-control"
                                                value="{{ $fcar->energy_result_g }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="energy_result_ml" class="form-control"
                                                value="{{ $fcar->energy_result_ml }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Test Parameter</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na" class="form-control"
                                                value="{{ $fcar->na }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Reference Method</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na_ref" class="form-control"
                                                value="{{ $fcar->na_ref }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 g)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na_result_g" class="form-control"
                                                value="{{ $fcar->na_result_g }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Result (100 ml)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="na_result_ml" class="form-control"
                                                value="{{ $fcar->na_result_ml }}">
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
                                                value="{{ $fcar->remark }}">
                                        </div>
                                    </div>
                                </div>
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
                                                value="{{ $fcar->name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Position</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="position" class="form-control"
                                                value="{{ $fcar->position }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked by</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check1" class="form-control"
                                                value="{{ $fcar->check1 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked by</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="check2" class="form-control"
                                                value="{{ $fcar->check2 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">1 Package</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="one_package" class="form-control"
                                                value="{{ $fcar->one_package }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Energy</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="energy_fact" class="form-control"
                                                value="{{ $fcar->energy_fact }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Protein</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="protein_fact" class="form-control"
                                                value="{{ $fcar->protein_fact }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Fat</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="fat_fact" class="form-control"
                                                value="{{ $fcar->fat_fact }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Carbohydrate</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="carbo_fact" class="form-control"
                                                value="{{ $fcar->carbo_fact }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sodium</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="na_fact" class="form-control"
                                                value="{{ $fcar->na_fact }}">
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

    <script></script>

@endsection
