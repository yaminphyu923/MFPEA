@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('f05.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                        <button type="button" class="btn btn-md btn-primary print"><i class="fas fa-print"></i>
                            <b>Print</b></button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="gc-head">Food Industries Development Supporting Laboratory- FIDSL</h3>

    <div class="flex-container" style="margin-bottom:10px;">
        <div style="flex-grow: 5">

        </div>
        <div class="analysis" style="flex-grow: 15">
            ANALYSIS RESULTS
        </div>
        <div class="gc-form" style="flex-grow: 1">F-CAR-05-01</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">Job Number</td>
                <td>: {{ $f05->job_number != null ? $f05->job_number : '' }}</td>
            </tr>
            <tr>
                <td>Analysis Report No</td>
                <td>: {{ $f05->report_no != null ? $f05->report_no : '-' }}</td>
            </tr>
            <tr>
                <td>Issue Date</td>
                <td>: {{ $f05->issue_date != null ? date('d-M-Y', strtotime($f05->issue_date)) : '' }}</td>
            </tr>

            <tr>
                <td>Analysis Date</td>
                <td>: {{ $f05->analysis_date != null ? date('d-M-Y', strtotime($f05->analysis_date)) : '' }}</td>
            </tr>

            <tr>
                <td>Results</td>
                <td>: {{ $f05->results != null ? $f05->results : '' }}</td>
            </tr>
        </table>
    </div>


    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th>Sr.No</th>
                <th>Test Parameter</th>
                <th>Reference Method</th>
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

    <div class="flex-box">
        <div>
            <h4>Remark</h4>
        </div>
        <div>
            <h4>: {{ $f05->remarks != null ? $f05->remarks : 'ND = Not Detected' }} </b></h4>
        </div>
    </div>

    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4 style="height: 44px;">Sign</h4>
            <h4>Name</h4>
            <h4>Position</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            : @if ($f05->sign != null)
                <img src="{{ asset('photos/other_f05s/' . $f05->sign) }}" alt="" style="width:100px;height:44px;">
            @else
                <span>____</span>
            @endif

            <h4>: <b>{{ $f05->name != null ? $f05->name : '' }}</b></h4>
            <h4>: <b>{{ $f05->position != null ? $f05->position : '' }}</b></h4>

        </div>

        <div style="flex-grow: 2">

            <h4 style="height: 44px;">Checked by</h4>
            <h4></h4>
            <h4>Checked by</h4>
        </div>

        <div style="flex-grow: 2;">

            <h4 style="height: 44px;">: <b>{{ $f05->check1 != null ? $f05->check1 : '' }}</b></h4>
            <h4></h4>
            <h4>: <b>{{ $f05->check2 != null ? $f05->check2 : '' }}</b></h4>

        </div>

    </div>
@endsection
