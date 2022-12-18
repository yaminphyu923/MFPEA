@extends('backend.main')

@section('lab-active', 'active')

@section('fcar0501-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fcar0501.index') }}">
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
                <p class="border text-center p-2"><b>F-Car-05-01</b></p>
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

                        <tr>
                            <td>Customer</td>
                            <td>: {{ $car->customer != null ? $car->customer->name : '' }}</td>
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
                            <th>Result</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($car_tests as $car_test)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $car_test->test_parameter }}</td>
                                <td>{{ $car_test->method }}</td>
                                <td>{{ $car_test->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                <span>Remark: {{ $car->remark != null ? $car->remark : 'ND = Not Detected' }}</span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign:
                    @if ($car->sign != null)
                        <img src="{{ asset('photos/na_fcar0501s/' . $car->sign) }}" alt="" style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $car->check1 }}</b></span>
            </div>

            <div class="col-sm-12 my-3">
                <span>Name: <b>{{ $car->name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Position: <b>{{ $car->position }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by :
                    <b>{{ $car->check2 }}</b></span>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
