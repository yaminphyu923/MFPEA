@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('fche040119.index') }}">
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
            WORK SHEET FOR DETERMINATION OF HARDNESS OF CONDUCTIVITY
        </div>
        <div class="gc-form" style="flex-grow: 1">FIDSL-Che-04-01/19</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">Job Number</td>
                <td>: {{ $che->job_number != null ? $che->job_number : '' }}</td>
            </tr>
            <tr>
                <td>Sample Name</td>
                <td>: {{ $che->sample_name != null ? $che->sample_name : '-' }}</td>
            </tr>

            <tr>
                <td>Received Date</td>
                <td>: {{ $che->received_date != null ? date('d-M-Y', strtotime($che->received_date)) : '-' }}</td>
            </tr>

            <tr>
                <td>Date Initiated for Analysis</td>
                <td>: {{ $che->initiated_date != null ? date('d-M-Y', strtotime($che->initiated_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>Reported Date</td>
                <td>: {{ $che->reported_date != null ? date('d-M-Y', strtotime($che->reported_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>Method</td>
                <td>: {{ $che->method != null ? $che->method : '' }}
            </tr>

        </table>
    </div>


    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th>Data</th>
                <th>1<sup>st</sup> Reading</th>
                <th>2<sup>st</sup> Reading</th>
            </tr>
        </thead>

        <tbody>
            <tr style="border-color: #F5F7FF;">
                <td>{{ $che->calibration }}</td>
                <td>{{ $che->calibration_test1 }}</td>
                <td>{{ $che->calibration_test2 }}</td>
            </tr>

            <tr style="border-color: #F5F7FF;">
                <td>{{ $che->sample }}</td>
                <td>{{ $che->sample_test1 }}</td>
                <td>{{ $che->sample_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $che->temperature }}</td>
                <td>{{ $che->temperature_test1 }}</td>
                <td>{{ $che->temperature_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $che->result }}</td>
                <td>{{ $che->result_test1 }}</td>
                <td>{{ $che->result_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $che->conductivity }}</td>
                <td>{{ $che->conductivity_test1 }}</td>
                <td>{{ $che->conductivity_test2 }}</td>
            </tr>

        </tbody>
    </table>


    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4>Analysed by Sign</h4>
            <h4>Date</h4>
            <h4>Name</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            : @if ($che->analysed_sign != null)
                <img src="{{ asset('photos/wt_fche040119s/analysed_sign/' . $che->analysed_sign) }}" alt=""
                    style="width:100px;">
            @else
                <span>____</span>
            @endif

            <h4>: <b>{{ $che->analysed_date != null ? date('d-M-Y', strtotime($che->analysed_date)) : '' }}</b></h4>
            <h4>: <b>{{ $che->analysed_name != null ? $che->analysed_name : '' }}</b></h4>

        </div>

        <div style="flex-grow: 2">

            <h4>Checked by Sign</h4>
            <h4>Date</h4>
            <h4>Name</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            : @if ($che->checked_sign != null)
                <img src="{{ asset('photos/wt_fche040119s/checked_sign/' . $che->checked_sign) }}" alt=""
                    style="width:100px;">
            @else
                <span>____</span>
            @endif

            <h4>: <b>{{ $che->checked_date != null ? date('d-M-Y', strtotime($che->checked_date)) : '' }}</b></h4>
            <h4>: <b>{{ $che->checked_name != null ? $che->checked_name : '' }}</b></h4>

        </div>
    </div>
@endsection
