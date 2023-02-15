@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('f03m06.index') }}">
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
            WORKSHEET FOR YEAST AND MOULD COUNT
        </div>
        <div class="gc-form" style="flex-grow: 1">FIDSL-03-M-06</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td>Job Number</td>
                <td>: {{ $f03m06->job_number != null ? $f03m06->job_number : '' }}</td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>: {{ $f03m06->product_name != null ? $f03m06->product_name : '' }}</td>
            </tr>
            <tr>
                <td>Date Received</td>
                <td>: {{ $f03m06->received_date != null ? date('d-M-Y', strtotime($f03m06->received_date)) : '' }}</td>
            </tr>
            <tr>
                <td>Date Initiated for Analysis</td>
                <td>: {{ $f03m06->initiated_date != null ? date('d-M-Y', strtotime($f03m06->initiated_date)) : '' }}</td>
            </tr>
            <tr>
                <td>Date Reported</td>
                <td>: {{ $f03m06->reported_date != null ? date('d-M-Y', strtotime($f03m06->reported_date)) : '' }}</td>
            </tr>
            <tr>
                <td>Incubation Period</td>
                <td>: {{ $f03m06->period != null ? $f03m06->period : '' }}</td>
            </tr>
            <tr>
                <td>Food Homogenate</td>
                <td>: {{ $f03m06->homogenate != null ? $f03m06->homogenate : '' }}</td>
            </tr>
            <tr>
                <td>Method</td>
                <td>: {{ $f03m06->method != null ? $f03m06->method : '' }}</td>
            </tr>

        </table>
    </div>


    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th rowspan="2" style="vertical-align: middle;text-align:center;">Dilution</th>
                <th colspan="2" style="text-align: center;">Yeast and Mould Count</th>
            </tr>
            <tr>
                <th>Plate1</th>
                <th>Plate2</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td style="text-align: center;">10<sup>0</sup></td>
                <td style="text-align: center;">{{ $f03m06->zero_plate1 }}</td>
                <td style="text-align: center;">{{ $f03m06->zero_plate2 }}</td>
            </tr>
            <tr>
                <td style="text-align: center;">10<sup>-1</sup></td>
                <td style="text-align: center;">{{ $f03m06->minus_one_plate1 }}</td>
                <td style="text-align: center;">{{ $f03m06->minus_one_plate2 }}</td>
            </tr>
            <tr>
                <td style="text-align: center;">10<sup>-2</sup></td>
                <td style="text-align: center;">{{ $f03m06->minus_two_plate1 }}</td>
                <td style="text-align: center;">{{ $f03m06->minus_two_plate2 }}</td>
            </tr>
            <tr>
                <td style="text-align: center;">10<sup>-3</sup></td>
                <td style="text-align: center;">{{ $f03m06->minus_three_plate1 }}</td>
                <td style="text-align: center;">{{ $f03m06->minus_three_plate2 }}</td>
            </tr>
            <tr>
                <td style="text-align: center;">10<sup>-4</sup></td>
                <td style="text-align: center;">{{ $f03m06->minus_four_plate1 }}</td>
                <td style="text-align: center;">{{ $f03m06->minus_four_plate2 }}</td>
            </tr>
            <tr>
                <td style="text-align: center;">10<sup>-5</sup></td>
                <td style="text-align: center;">{{ $f03m06->minus_five_plate1 }}</td>
                <td style="text-align: center;">{{ $f03m06->minus_five_plate2 }}</td>
            </tr>
        </tbody>
    </table>


    <div class="flex-box">
        <div>
            <h4>Yeast and Mould Count</h4>
        </div>
        <div>
            <h4>: {{ $f03m06->yeast_mould }} cfu/g</b></h4>
        </div>
    </div>


    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4>Analysed by </h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            <h4>: <b>{{ $f03m06->analysed_name != null ? $f03m06->analysed_name : '' }}</b></h4>

            : @if ($f03m06->analysed_sign != null)
                <img src="{{ asset('photos/mw_f03m06s/analysed_sign/' . $f03m06->analysed_sign) }}" alt=""
                    style="width:100px;height:44px;">
            @else
                <span>____</span>
            @endif
            <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f03m06->analysed_date)) }}</b></h5>

        </div>

        <div style="flex-grow: 2">

            <h4>Checked By </h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            <h4>: <b>{{ $f03m06->checked_name != null ? $f03m06->checked_name : '' }}</b></h4>

            : @if ($f03m06->checked_sign != null)
                <img src="{{ asset('photos/mw_f03m06s/checked_sign/' . $f03m06->checked_sign) }}" alt=""
                    style="width:100px;height:44px;">
            @else
                <span>____</span>
            @endif
            <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f03m06->checked_date)) }}</b></h5>

        </div>
    </div>
@endsection
