@extends('backend.main')

@section('lab-active', 'active')

@section('f05-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('f05.index') }}">
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
                <p class="border text-center p-2"><b>F-CAR-05-01</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $f05->job_number != null ? $f05->job_number : '' }}</td>
                        </tr>
                        <tr>
                            <td>Analysis Report No.</td>
                            <td>: {{ $f05->report_no != null ? $f05->report_no : '-' }}</td>
                        </tr>

                        <tr>
                            <td>Issue Date</td>
                            <td>: {{ $f05->issue_date != null ? date('d-M-Y', strtotime($f05->issue_date)) : '' }}</td>
                        </tr>

                        <tr>
                            <td>Analysis Date</td>
                            <td>: {{ $f05->analysis_date != null ? date('d-M-Y', strtotime($f05->analysis_date)) : '' }}
                            </td>
                        </tr>



                        <tr>
                            <td>Results</td>
                            <td>: {{ $f05->results != null ? $f05->results : '' }}</td>
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
                            <th>Test Method</th>
                            <th>Result</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($f05_tests as $f05_test)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $f05_test->test_parameter }}</td>
                                <td>{{ $f05_test->method }}</td>
                                <td>{{ $f05_test->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                <span>Remark: {{ $f05->remarks != null ? $f05->remarks : 'ND = Not Detected' }}</span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign:
                    @if ($f05->sign != null)
                        <img src="{{ asset('photos/other_f05s/' . $f05->sign) }}" alt="" style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $f05->check1 }}</b></span>
            </div>

            <div class="col-sm-12 my-3">
                <span>Name: <b>{{ $f05->name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Position: <b>{{ $f05->position }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by :
                    <b>{{ $f05->check2 }}</b></span>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
