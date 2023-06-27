@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('aw-ad0201.index') }}">
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

    <h3 class="head">Food Industries Development Supporting Laboratory- FIDSL</h3>

    <div class="flex-container">
        <div class="analysis" style="flex-grow: 12">
            SAMPLE CONTROL FORM
        </div>
        <div class="form" style="flex-grow: 1;margin-top: 20px;">FIDSL-Ad-02-01</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped" style="margin-top: 10px;">
            <tr>
                <td style="width:300px;">1.Job Number</td>
                <td>: {{ $ad->job_number != null ? $ad->job_number : '' }}</td>
            </tr>

            {{-- <tr>
                <td style="width:300px;">2.Customer Name</td>
                <td>: {{ $ad->customer_id != null ? $ad->customer_id : '' }}</td>
            </tr> --}}

            <tr>
                <td>2.Sample Name/Code</td>
                <td>: {{ $ad->sample_name_code != null ? $ad->sample_name_code : '' }}</td>
            </tr>
            <tr>
                <td>3.Sample Description</td>
                <td>: {{ $ad->sample_description != null ? $ad->sample_description : '' }}</td>
            </tr>

            <tr>
                <td style="padding-left: 100px;">- Sample Type</td>
                <td>: {{ $ad->sample_type != null ? $ad->sample_type : '' }}</td>
            </tr>
            <tr>
                <td style="padding-left: 100px;">- Sample Amount</td>
                <td>: {{ $ad->sample_amount != null ? $ad->sample_amount : '' }}</td>
            </tr>
            <tr>
                <td style="padding-left: 100px;">- Temperature on Arrival</td>
                <td>: {{ $ad->arrival_temperature != null ? $ad->arrival_temperature : '' }}</td>
            </tr>
            <tr>
                <td style="padding-left: 100px;">- Packaging Type</td>
                <td>: {{ $ad->pakaging_type != null ? $ad->pakaging_type : '' }}</td>
            </tr>
            <tr>
                <td style="padding-left: 100px;">- Physical Condition of Package</td>
                <td>: {{ $ad->physical_condition_package != null ? $ad->physical_condition_package : '' }}</td>
            </tr>
            <tr>
                <td>4.Admin Receiver</td>
                <td>: {{ $ad->admin_receiver != null ? $ad->admin_receiver : '-' }}</td>
            </tr>
            <tr>
                <td>5.Date Received by Admin</td>
                <td>: {{ $ad->admin_date_received != null ? date('d-M-Y', strtotime($ad->admin_date_received)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>6.Date Received by Lab</td>
                <td>: {{ $ad->lab_date_received != null ? date('d-M-Y', strtotime($ad->lab_date_received)) : '' }}</td>
            </tr>
            <tr>
                <td>7.Lab. Receiver</td>
                <td>: {{ $ad->lab_receiver != null ? $ad->lab_receiver : '' }}</td>
            </tr>
            <tr>
                <td>8.Lab. Received</td>
                <td>: {{ $ad->lab_received != null ? $ad->lab_received : '' }}</td>
            </tr>
            <tr>
                <td>9.Method of Storage</td>
                <td>: {{ $ad->storage_method != null ? $ad->storage_method : '' }}</td>
            </tr>
            <tr>
                <td>10.Type of Test</td>
                <td>: {{ $ad->test_type != null ? $ad->test_type : '' }}</td>
            </tr>
            <tr>
                <td>11.Duration to be performed</td>
                <td>: {{ $ad->performed_duration != null ? $ad->performed_duration : '' }}</td>
            </tr>
            <tr>
                <td>12.Sample Disposal Date</td>
                <td>: {{ $ad->disposal_date != null ? date('d-M-Y', strtotime($ad->disposal_date)) : '' }}</td>
            </tr>
        </table>
    </div>


    <div class="flex-container">
        <div style="flex-grow: 2">
            <h4>Prepared by</h4>
            <h4>Position </h4>
        </div>

        <div style="flex-grow: 5">
            <h4>: <b>{{ $ad->prepared_by != null ? $ad->prepared_by : '' }}</b></h4>
            <h4>: <b>{{ $ad->prepared_position != null ? $ad->prepared_position : '' }}</b></h4>
        </div>

        <div style="flex-grow: 2">
            <h4>Verified by:</h4>
            <h4>Position :</h4>
        </div>

        <div style="flex-grow: 5">
            <h4>: <b>{{ $ad->verified_by != null ? $ad->verified_by : '' }}</b></h4>
            <h4>: <b>{{ $ad->verified_position != null ? $ad->verified_position : '' }}</b></h4>
        </div>

    </div>
@endsection
