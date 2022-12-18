@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('ad01354.index') }}">
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

    <h3 class="gc-head">Myanmar Food Processors and Exporters Association</h3>
    <h4 class="gc-head">Food Industries Development Supporting Laboratory</h4>

    <div class="flex-container" style="margin-bottom: 10px;">
        <div class="analysis" style="flex-grow: 11;">
            LABORATORY ANALYSIS REPORT
        </div>
        <div class="gc-form" style="flex-grow: 1">FIDSL-Ad-06-03-01354 / 22</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $ad->company_name != null ? $ad->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $ad->address != null ? $ad->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $ad->phone != null ? $ad->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>: {{ $ad->lab_received_date != null ? date('d-M-Y', strtotime($ad->lab_received_date)) : '-' }}</td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $ad->sample_number != null ? $ad->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $ad->product_name != null ? $ad->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>: {{ $ad->test_performed_date != null ? date('d-M-Y', strtotime($ad->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $ad->test_type != null ? $ad->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $ad->issue_date != null ? date('d-M-Y', strtotime($ad->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $ad->results != null ? $ad->results : '' }}</td>
            </tr>
        </table>
    </div>

    <h4 style="text-align: center;">(This Laboratory analysis report is based solely on the sample(s) submitted by the
        customer.)
    </h4>

    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th>Sr.No</th>
                <th>Test Parameter</th>
                <th>Test Method</th>
                <th>Result</th>
                <th>Unit</th>
                <th>Limit of Detection</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ad_tests as $ad_test)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $ad_test->test_parameter }}</td>
                    <td>{{ $ad_test->test_method }}</td>
                    <td>{{ $ad_test->result }}</td>
                    <td>{{ $ad_test->unit }}</td>
                    <td>{{ $ad_test->detection }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $ad->method != null ? $ad->method : '' }}</b></h4>
        </div>
    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">

        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/cr_ad01354s/' . $ad->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $ad->checked_name != null ? $ad->checked_name : '' }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
