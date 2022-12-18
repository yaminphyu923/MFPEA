@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('aa_fcar0501.index') }}">
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
                <td>: {{ $che->job_number != null ? $che->job_number : '' }}</td>
            </tr>

            <tr>
                <td>Analysis Report No</td>
                <td>: {{ $che->report_no != null ? $che->report_no : '-' }}</td>
            </tr>
            <tr>
                <td>Sample Name</td>
                <td>: {{ $che->sample_name != null ? $che->sample_name : '-' }}</td>
            </tr>
            <tr>
                <td>Date Received</td>
                <td>: {{ $che->received_date != null ? date('d-M-Y', strtotime($che->received_date)) : '-' }}
                </td>
            </tr>

            <tr>
                <td>Analysis Date</td>
                <td>: {{ $che->analysis_date != null ? date('d-M-Y', strtotime($che->analysis_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>Issue Date</td>
                <td>: {{ $che->issue_date != null ? date('d-M-Y', strtotime($che->issue_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>Result</td>
                <td>: {{ $che->result != null ? $che->result : '' }}

                </td>
            </tr>

        </table>
    </div>


    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Test Parameter</th>
                <th>Test Method</th>
                <th>Result</th>
            </tr>
        </thead>

        <tbody>
            <tr style="border-color: #F5F7FF;">
                <td>1</td>
                <td>{{ $che->ace_para }}</td>
                <td rowspan="6">By Gas Chromatography</td>
                <td>{{ $che->ace_result }}</td>
            </tr>

            <tr style="border-color: #F5F7FF;">
                <td>2</td>
                <td>{{ $che->ethyl_para }}</td>

                <td>{{ $che->ethyl_result }}</td>
            </tr>

            <tr style="border-color: #F5F7FF;">
                <td>3</td>
                <td>{{ $che->methanol_para }}</td>

                <td>{{ $che->methanol_result }}</td>
            </tr>

            <tr style="border-color: #F5F7FF;">
                <td>4</td>
                <td>{{ $che->propanol_para }}</td>

                <td>{{ $che->propanol_result }}</td>
            </tr>

            <tr style="border-color: #F5F7FF;">
                <td>5</td>
                <td>{{ $che->iso_para }}</td>

                <td>{{ $che->iso_result }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $che->methyl_para }}</td>

                <td>{{ $che->methyl_result }}</td>
            </tr>

        </tbody>
    </table>


    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4>Sign</h4>
            <h4>Name</h4>
            <h4>Position</h4>
            <h4>Check By</h4>
            <h4>Check By</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            : @if ($che->sign != null)
                <img src="{{ asset('photos/aa_fcar0501s/' . $che->sign) }}" alt="" style="width:100px;">
            @else
                <span>____</span>
            @endif

            <h4>: <b>{{ $che->name != null ? $che->name : '' }}</b></h4>
            <h4>: <b>{{ $che->position != null ? $che->position : '' }}</b></h4>
            <h4>: <b>{{ $che->check1 != null ? $che->check1 : '' }}</b></h4>
            <h4>: <b>{{ $che->check2 != null ? $che->check2 : '' }}</b></h4>

        </div>

    </div>
@endsection
