@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('fche040004.index') }}">
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
            WORKSHEET FOR DETERMINATION OF CRUDE FAT
        </div>
        <div class="gc-form" style="flex-grow: 1">FIDSL-Che-04-00/04</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td>Job Number</td>
                <td>: {{ $fche040004->job_number != null ? $fche040004->job_number : '' }}</td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>: {{ $fche040004->product_name != null ? $fche040004->product_name : '' }}</td>
            </tr>
            <tr>
                <td>Date Received</td>
                <td>: {{ $fche040004->received_date != null ? date('d-M-Y', strtotime($fche040004->received_date)) : '' }}
                </td>
            </tr>
            <tr>
                <td>Date Initiated for Analysis</td>
                <td>: {{ $fche040004->analysed_date != null ? date('d-M-Y', strtotime($fche040004->analysed_date)) : '' }}
                </td>
            </tr>
            <tr>
                <td>Date Reported</td>
                <td>: {{ $fche040004->reported_date != null ? date('d-M-Y', strtotime($fche040004->reported_date)) : '' }}
                </td>
            </tr>
            <tr>
                <td>Method</td>
                <td>: {{ $fche040004->method != null ? $fche040004->method : '' }}</td>
            </tr>

        </table>
    </div>


    <table class="gc-table table table-bordered">
        <tbody>
            <tr>
                <td>Data</td>
                <td>1st Test</td>
                <td>2nd Test</td>
            </tr>
            @foreach ($fts as $ft)
                <tr>
                    <td>{{ $ft->data }}</td>
                    <td>{{ $ft->test1 }}</td>
                    <td>{{ $ft->test2 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4>Analysed by </h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            <h4>: <b>{{ $fche040004->analysed_name != null ? $fche040004->analysed_name : '' }}</b></h4>

            : @if ($fche040004->analysed_sign != null)
                <img src="{{ asset('photos/na_fche040004s/analysed_sign/' . $fche040004->analysed_sign) }}"
                    alt="" style="width:100px;height:44px;">
                <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($fche040004->analysed_date)) }}</b></h5>
            @else
                <span>____</span>
            @endif
        </div>

        <div style="flex-grow: 2">

            <h4>Checked by </h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            <h4>: <b>{{ $fche040004->checked_name != null ? $fche040004->checked_name : '' }}</b></h4>

            : @if ($fche040004->checked_sign != null)
                <img src="{{ asset('photos/na_fche040004s/checked_sign/' . $fche040004->checked_sign) }}" alt=""
                    style="width:100px;height:44px;">
                <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($fche040004->checked_date)) }}</b></h5>
            @else
                <span>____</span>
            @endif
        </div>
    </div>
@endsection
