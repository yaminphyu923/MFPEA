@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('ad01357s.index') }}">
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

    <h3 class="gc-head" style="margin-top:-10px;">Myanmar Food Processors and Exporters Association</h3>
    <h4 class="gc-head" style="margin-top:-10px;">Food Industries Development Supporting Laboratory</h4>

    <div class="flex-container" style="margin-bottom: 10px;">
        <div class="analysis" style="flex-grow: 11;">
            LABORATORY ANALYSIS REPORT
        </div>
        <div class="gc-form" style="flex-grow: 1">FIDSL-Ad-06-03-01357 / 22</div>
    </div>

    <div class="flex-box" style="margin-bottom:-40px;">
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
                <td>5.Consignee</td>
                <td>: {{ $ad->consignee != null ? $ad->consignee : '' }}</td>
            </tr>
            <tr>
                <td>6.Quantity</td>
                <td>: {{ $ad->quantity != null ? $ad->quantity : '' }}</td>
            </tr>
            <tr>
                <td>7.Packing</td>
                <td>: {{ $ad->packing != null ? $ad->packing : '' }}</td>
            </tr>
            <tr>
                <td>8.Port of Loading</td>
                <td>: {{ $ad->loading != null ? $ad->loading : '' }}</td>
            </tr>
            <tr>
                <td>9.Port of Discharge</td>
                <td>: {{ $ad->discharge != null ? $ad->discharge : '' }}</td>
            </tr>
            <tr>
                <td>10.Vessel Name</td>
                <td>: {{ $ad->vessel_name != null ? $ad->vessel_name : '' }}</td>
            </tr>
            <tr>
                <td>11.EORI</td>
                <td>: {{ $ad->eori != null ? $ad->eori : '' }}</td>
            </tr>
            <tr>
                <td>12.H.S Code</td>
                <td>: {{ $ad->hscode != null ? $ad->hscode : '' }}</td>
            </tr>
            <tr>
                <td>13.PO Number</td>
                <td>: {{ $ad->ponumber != null ? $ad->ponumber : '' }}</td>
            </tr>
            <tr>
                <td>14.Sample Taken By</td>
                <td>: {{ $ad->sample_taken != null ? $ad->sample_taken : '' }}</td>
            </tr>
            <tr>
                <td>15.Sample Number</td>
                <td>: {{ $ad->sample_number != null ? $ad->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>16.Product Name</td>
                <td>: {{ $ad->product_name != null ? $ad->product_name : '' }}</td>
            </tr>
            <tr>
                <td>17.Test Performed Date</td>
                <td>: {{ $ad->test_performed_date != null ? date('d-M-Y', strtotime($ad->test_performed_date)) : '' }}</td>
            </tr>

            <tr>
                <td>18.Test Type</td>
                <td>: {{ $ad->test_type != null ? $ad->test_type : '' }}</td>
            </tr>
            <tr>
                <td>19.Issue Date</td>
                <td>: {{ $ad->issue_date != null ? date('d-M-Y', strtotime($ad->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>20.Results</td>
                <td>: {{ $ad->results != null ? $ad->results : '' }}</td>
            </tr>
        </table>
    </div>

    <h4 style="text-align: center;">(This Laboratory analysis report is based solely on the sample(s)
        submitted by the
        customer.)
    </h4>

    <table class="gc-table table table-bordered" style="margin-top:-20px;">
        <thead>
            <tr>
                <th>Sr.No</th>
                <th>Test Parameter</th>
                <th>Test Method</th>
                <th>Result</th>
                <th>Reference Range</th>
                <th>Reference Standard</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ad_tests as $ad_test)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $ad_test->test_parameter }}</td>
                    <td>{{ $ad_test->test_method }}</td>
                    <td>{{ $ad_test->result }}</td>
                    <td>{{ $ad_test->range }}</td>
                    <td>{{ $ad_test->standard }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h5 style="margin-top:-40px;">ND = Not Detectable</h5>
    <h5 style="margin-top:-20px;">cfu = Colony Forming Unit</h5>

    <div class="flex-box" style="margin-top:-40px;">
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
            <img src="{{ asset('photos/mr_ad01357s/' . $ad->sign) }}" alt="" style="width:100px;">
            <h4 style="margin-top:-10px;"><b>{{ $ad->checked_name != null ? $ad->checked_name : '' }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;margin-top:-20px;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
