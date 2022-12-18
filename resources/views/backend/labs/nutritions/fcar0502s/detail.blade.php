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
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 my-3">
                <h4 class="text-center"><b>Food Industries Development Supporting Laboratory- FIDSL</b></h4>
            </div>

            <div class="col-sm-12">
                <h5 class="text-center"><b>ANALYSIS RESULTS</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>F-Car-05-02</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $car->job_number != null ? $car->job_number : '' }}</td>
                        </tr>
                        <tr>
                            <td>Analysis Report No.</td>
                            <td>: {{ $car->report_no != null ? $car->report_no : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Sample Name</td>
                            <td>: {{ $car->sample_name != null ? $car->sample_name : '' }}</td>
                        </tr>
                        <tr>
                            <td>Date Received</td>
                            <td>: {{ $car->received_date != null ? date('d-M-Y', strtotime($car->received_date)) : '-' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Analysis Date</td>
                            <td>: {{ $car->analysis_date != null ? date('d-M-Y', strtotime($car->analysis_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Issue Date</td>
                            <td>: {{ $car->issue_date != null ? date('d-M-Y', strtotime($car->issue_date)) : '' }}</td>
                        </tr>

                        <tr>
                            <td>Results</td>
                            <td>: {{ $car->results != null ? $car->results : '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Test Parameter</th>
                            <th>Reference Method</th>
                            <th>Result (100 g)</th>
                            <th>Result (100 ml)</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{ $car->moisture }}</td>
                            <td>{{ $car->moisture_ref }}</td>
                            <td>{{ $car->moisture_result_g }}</td>
                            <td>{{ $car->moisture_result_ml }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $car->ash }}</td>
                            <td>{{ $car->ash_ref }}</td>
                            <td>{{ $car->ash_result_g }}</td>
                            <td>{{ $car->ash_result_ml }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $car->protein }}</td>
                            <td>{{ $car->protein_ref }}</td>
                            <td>{{ $car->protein_result_g }}</td>
                            <td>{{ $car->protein_result_ml }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $car->fiber }}</td>
                            <td>{{ $car->fiber_ref }}</td>
                            <td>{{ $car->fiber_result_g }}</td>
                            <td>{{ $car->fiber_result_ml }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $car->fat }}</td>
                            <td>{{ $car->fat_ref }}</td>
                            <td>{{ $car->fat_result_g }}</td>
                            <td>{{ $car->fat_result_ml }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $car->carbo }}</td>
                            <td>{{ $car->carbo_ref }}</td>
                            <td>{{ $car->carbo_result_g }}</td>
                            <td>{{ $car->carbo_result_ml }}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>{{ $car->energy }}</td>
                            <td>{{ $car->energy_ref }}</td>
                            <td>{{ $car->energy_result_g }}</td>
                            <td>{{ $car->energy_result_ml }}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>{{ $car->na }}</td>
                            <td>{{ $car->na_ref }}</td>
                            <td>{{ $car->na_result_g }}</td>
                            <td>{{ $car->na_result_ml }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                <span>Remark: {{ $car->remark != null ? $car->remark : 'ND = Not Detected' }}</span>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12 my-3">

                        <span>Sign:
                            @if ($car->sign != null)
                                <img src="{{ asset('photos/na_fcar0502s/' . $car->sign) }}" alt=""
                                    style="width:100px;">
                            @else
                                <span>____</span>
                            @endif
                        </span>

                    </div>

                    <div class="col-sm-12 my-3">
                        <span>Check by : <b>{{ $car->check1 }}</b></span>
                    </div>

                    <div class="col-sm-12 my-3">
                        <span>Name: <b>{{ $car->name }}</b></span>
                    </div>

                    <div class="col-sm-12 my-3">
                        <span>Position: <b>{{ $car->position }}</b></span>
                    </div>

                    <div class="col-sm-12 my-3">
                        <span>Check by :
                            <b>{{ $car->check2 }}</b></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card" style="background-color: #F5F7FF;">
                    <div class="card-body">
                        <h4 class="text-center">Nutrition Facts</h4>
                        <h4 class="text-center">{{ $car->one_package }}</h4>

                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Energy</h4>
                                <h4>Protein</h4>
                                <h4>Fat</h4>
                                <h4>Carbohydrate</h4>
                                <h4>Sodium</h4>
                            </div>

                            <div>
                                <h4>{{ $car->energy_fact }} kcal</h4>
                                <h4>{{ $car->protein_fact }} g</h4>
                                <h4>{{ $car->fat_fact }} g</h4>
                                <h4>{{ $car->carbo_fact }} g</h4>
                                <h4>{{ $car->sodium_fact }} g or mg</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
