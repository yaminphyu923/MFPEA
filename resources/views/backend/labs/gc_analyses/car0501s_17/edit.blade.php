@extends('backend.main')

@section('lab-active', 'active')

@section('car0501-17-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('car0501s_17.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
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
                <div class="card btn-theme text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Edit F-Car-05-01</b></h4>
                    </div>

                    <form action="{{ route('car0501.update', $car->id) }}" method="POST" enctype="multipart/form-data">
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
                            <div class="test">
                                {{-- @foreach ($car_test_fills as $car_test_fill)
                                    <input type="hidden" name="test_fill_id[]" value="{{ $car_test_fill->id }}">
                                    <div class="row">

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-6">Test Parameter</label>

                                                <div class="col-sm-6">
                                                    <input type="text" name="test_parameter[]" class="form-control"
                                                        autocomplete="off" value="{{ $car_test_fill->test_parameter }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Test Method</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="test_method[]" class="form-control"
                                                        autocomplete="off" value="{{ $car_test_fill->test_method }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 my-0">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-5">Result</label>

                                                <div class="col-sm-7">
                                                    <input type="text" name="test_result[]" class="form-control"
                                                        autocomplete="off" value="{{ $car_test_fill->test_result }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="lauric_12_0_para" class="form-control"
                                                    value="C 12:0 (Lauric)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="lauric_12_0_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="lauric_12_0_result" class="form-control"
                                                    value="{{ $car->lauric_12_0_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="myristic_14_0_para" class="form-control"
                                                    value="C 14:0 (Myristic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="myristic_14_0_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="myristic_14_0_result" class="form-control"
                                                    value="{{ $car->myristic_14_0_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="myristoleic_14_1_para" class="form-control"
                                                    value="C 14:1 (Myristoleic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="myristoleic_14_1_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="myristoleic_14_1_result" class="form-control"
                                                    value="{{ $car->myristoleic_14_1_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="palmitic_16_0_para" class="form-control"
                                                    value="C 16:0 (Palmitic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="palmitic_16_0_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="palmitic_16_0_result" class="form-control"
                                                    value="{{ $car->palmitic_16_0_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="palmitoleic_16_1_para" class="form-control"
                                                    value="C 16:1 (Palmitoleic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="palmitoleic_16_1_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="palmitoleic_16_1_result" class="form-control"
                                                    value="{{ $car->palmitoleic_16_1_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="stearic_18_0_para" class="form-control"
                                                    value="C 18:0 (Stearic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="stearic_18_0_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="stearic_18_0_result" class="form-control"
                                                    value="{{ $car->stearic_18_0_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="oleictrans_18_1_para" class="form-control"
                                                    value="C 18:1 (Oleic-trans)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="oleictrans_18_1_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="oleictrans_18_1_result" class="form-control"
                                                    value="{{ $car->oleictrans_18_1_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="oleic_18_1_para" class="form-control"
                                                    value="C 18:1 (Oleic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="oleic_18_1_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="oleic_18_1_result" class="form-control"
                                                    value="{{ $car->oleic_18_1_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="linoleictrans_18_2_para" class="form-control"
                                                    value="C 18:2 (Linoleic-trans)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="linoleictrans_18_2_method"
                                                    class="form-control" value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="linoleictrans_18_2_result"
                                                    class="form-control" value="{{ $car->linoleictrans_18_2_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="linoleic_18_2_para" class="form-control"
                                                    value="C 18:2 (Linoleic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="linoleic_18_2_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="linoleic_18_2_result" class="form-control"
                                                    value="{{ $car->linoleic_18_2_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="linoleic_18_3_para" class="form-control"
                                                    value="C 18:3 (Linoleic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="linoleic_18_3_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="linoleic_18_3_result" class="form-control"
                                                    value="{{ $car->linoleic_18_3_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="arachidic_20_0_para" class="form-control"
                                                    value="C 20:0 (Arachidic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="arachidic_20_0_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="arachidic_20_0_result" class="form-control"
                                                    value="{{ $car->arachidic_20_0_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="paullinic_20_1_para" class="form-control"
                                                    value="C 20:1 (Paullinic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="paullinic_20_1_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="paullinic_20_1_result" class="form-control"
                                                    value="{{ $car->paullinic_20_1_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="arachidonic_20_4_para" class="form-control"
                                                    value="C 20:4 (Arachidonic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="arachidonic_20_4_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="arachidonic_20_4_result" class="form-control"
                                                    value="{{ $car->arachidonic_20_4_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="bchenic_22_0_para" class="form-control"
                                                    value="C 22:0 (Bchenic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="bchenic_22_0_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="bchenic_22_0_result" class="form-control"
                                                    value="{{ $car->bchenic_22_0_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="erucic_22_1_para" class="form-control"
                                                    value="C 22:1 (Erucic)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="erucic_22_1_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="erucic_22_1_result" class="form-control"
                                                    value="{{ $car->erucic_22_1_result }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-6">Test Parameter</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="lignoceric_24_0_para" class="form-control"
                                                    value="C 24:0 (Lignoceric)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Test Method</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="lignoceric_24_0_method" class="form-control"
                                                    value="By Gas Chromatography">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 my-0">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-5">Result</label>

                                            <div class="col-sm-7">
                                                <input type="text" name="lignoceric_24_0_result" class="form-control"
                                                    value="{{ $car->lignoceric_24_0_result }}">
                                            </div>
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

                                <div class="col-sm-6 my-0">
                                    <input type="hidden" name="status" value="1">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12 my-0 text-center">
                                    <button type="submit" class="btn btn-md btn-theme btn-success w-25 submit-button"><i
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
