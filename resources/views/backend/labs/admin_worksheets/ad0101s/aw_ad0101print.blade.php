@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br>
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('aw-ad0101.index') }}">
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

    <h3 class="head" style="padding-top:10px;">Myanmar Food Processors and Exporters Association (MFPEA)</h3>
    <h3 class="head">Food Industries Development Supporting Laboratory- FIDSL</h3>

    <div class="flex-container">
        <div class="analysis" style="flex-grow: 12">
            ANALYSIS REQUEST FORM
        </div>
        <div class="form" style="flex-grow: 1">FIDSL-Ad-01-01</div>
    </div>

    <h3 class="filled-customer">I. To be filled by customer</h3>

    {{-- <div class="flex-box">
        <div style="flex-grow: 3">
            <ol>
                <li>Company's Name</li>
                <li>Address</li>
                <li>Contact Person</li>
                <li>Sample Name/Code</li>
                <li>Description of Sample</li>
                <li>Packaging Type</li>
                <li>Type of Request</li>
                <li>Sampling Procedure</li>
                <li>Decision Rule</li>
                <li>Type of test and method</li>
                <li>Sample Quantity</li>
            </ol>
        </div>

        <div style="flex-grow: 6">
            <ul>
                <li>: {{ $ad->company_name != null ? $ad->company_name : '' }}</li>
                <li>: {{ $ad->address != null ? $ad->address : '' }}</li>
                <li>: {{ $ad->contact_person != null ? $ad->contact_person : '' }}</li>
                <li>: {{ $ad->sample_name_code != null ? $ad->sample_name_code : '-' }}</li>
                <li>: {{ $ad->sample_description != null ? $ad->sample_description : '-' }}</li>
                <li>: {{ $ad->package_type != null ? $ad->package_type : '' }}</li>
                <li>: {{ $ad->request_type != null ? $ad->request_type : '' }}</li>
                <li>: {{ $ad->sampling_procedure != null ? $ad->sampling_procedure : '' }}</li>
                <li>: {{ $ad->decision_rule != null ? $ad->decision_rule : '' }}</li>
                <li>: {{ $ad->test_method != null ? $ad->test_method : '' }}</li>
                <li>: {{ $ad->sample_quantity != null ? $ad->sample_quantity : '' }}</li>
            </ul>
        </div>
    </div> --}}

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company's Name</td>
                <td>: {{ $ad->company_name != null ? $ad->company_name : '' }}</td>
            </tr>

            <tr>
                <td>2.Address</td>
                <td>: {{ $ad->address != null ? $ad->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Contact Person</td>
                <td>: {{ $ad->contact_person != null ? $ad->contact_person : '' }}</td>
            </tr>
            <tr>
                <td>4.Sample Name/Code</td>
                <td>: {{ $ad->sample_name_code != null ? $ad->sample_name_code : '-' }}</td>
            </tr>
            <tr>
                <td>5.Description of Sample</td>
                <td>: {{ $ad->sample_description != null ? $ad->sample_description : '-' }}</td>
            </tr>
            <tr>
                <td>6.Packaging Type</td>
                <td>: {{ $ad->package_type != null ? $ad->package_type : '' }}</td>
            </tr>
            <tr>
                <td>7.Type of Request</td>
                <td>: {{ $ad->request_type != null ? $ad->request_type : '' }}</td>
            </tr>
            <tr>
                <td>8.Sampling Procedure</td>
                <td>: {{ $ad->sampling_procedure != null ? $ad->sampling_procedure : '' }}</td>
            </tr>
            <tr>
                <td>9.Decision Rule</td>
                <td>: {{ $ad->decision_rule != null ? $ad->decision_rule : '' }}</td>
            </tr>
            <tr>
                <td>10.Type of test and method</td>
                <td>: {{ $ad->test_method != null ? $ad->test_method : '' }}</td>
            </tr>
            <tr>
                <td>11.Sample Quantity</td>
                <td>: {{ $ad->sample_quantity != null ? $ad->sample_quantity : '' }}</td>
            </tr>
            {{-- <tr>
                <td style="width:300px;">12.Customer's Name</td>
                <td>: {{ $ad->customer != null ? $ad->customer->name : '' }}</td>
            </tr> --}}
        </table>
    </div>


    <div class="flex-container">
        <div style="flex-grow: 10">

        </div>

        <div style="flex-grow: 1">
            <h4>Signature</h4>
            <h4>Name</h4>
        </div>

        <div class="sign" style="flex-grow: 3">
            : <img src="{{ asset('photos/aw0101s/' . $ad->signature) }}" alt="" style="width:100px;">
            <h4>: <b>{{ $ad->name != null ? $ad->name : '' }}</b></h4>
        </div>

    </div>

    <h3 class="head">ဓာတ်ခွဲစမ်းသပ်ရန် နမူနာပစ္စည်းအပေါ် လုပ်ငန်းအပ်နှံသူမှ တာဝန်ယူပါသည်။</h3>

    <h3 class="filled-customer">II. To be filled by Laboratory</h3>

    {{-- <div class="flex-box">
        <div style="flex-grow: 2">
            <ol>
                <li>Test Fee Received Date</li>
                <li>Sample Received Date</li>
                <li>Sample Number</li>
                <li>Received Quality</li>
                <li>Temperature on Sample Arrival</li>
                <li>Physical Condition of Sample Package</li>
                <li>Date Assigned for lab Report</li>
            </ol>
        </div>

        <div style="flex-grow: 6">
            <ul>
                <li>: {{ $ad->tf_received_date != null ? $ad->tf_received_date : '-' }}</li>
                <li>: {{ $ad->sample_received_date != null ? $ad->sample_received_date : '-' }}</li>
                <li>: {{ $ad->sample_number != null ? $ad->sample_number : '-' }}</li>
                <li>: {{ $ad->received_quality != null ? $ad->received_quality : '-' }}</li>
                <li>: {{ $ad->temperature_sa != null ? $ad->temperature_sa : '-' }}</li>
                <li>: {{ $ad->physical_sp != null ? $ad->physical_sp : '-' }}</li>
                <li>: {{ $ad->lab_report_date != null ? $ad->lab_report_date : '-' }}</li>
            </ul>
        </div>
    </div> --}}

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Test Fee Received Date</td>
                <td>: {{ $ad->tf_received_date != null ? date('d-M-Y', strtotime($ad->tf_received_date)) : '-' }}</td>
            </tr>
            <tr>
                <td>2.Sample Received Date</td>
                <td>: {{ $ad->sample_received_date != null ? date('d-M-Y', strtotime($ad->sample_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>3.Sample Number</td>
                <td>: {{ $ad->sample_number != null ? $ad->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>4.Received Quality</td>
                <td>: {{ $ad->received_quality != null ? $ad->received_quality : '-' }}</td>
            </tr>
            <tr>
                <td>5.Temperature on Sample Arrival</td>
                <td>: {{ $ad->temperature_sa != null ? $ad->temperature_sa : '-' }}</td>
            </tr>
            <tr>
                <td>6.Physical Condition of Sample Package</td>
                <td>: {{ $ad->physical_sp != null ? $ad->physical_sp : '-' }}</td>
            </tr>
            <tr>
                <td>7.Date Assigned for lab Report</td>
                <td>: {{ $ad->lab_report_date != null ? date('d-M-Y', strtotime($ad->lab_report_date)) : '-' }}</td>
            </tr>
        </table>
    </div>

    <div class="flex-container">
        <div style="flex-grow: 2">
            <h4 class="form">Job Number - {{ $ad->job_number }}</h4>
        </div>
        <div style="flex-grow: 10">

        </div>

        <div style="flex-grow: 1">
            <h4>Signature</h4>
            <h4>Name</h4>
        </div>

        <div class="sign" style="flex-grow: 3">
            : <img src="{{ asset('photos/aw0101s/' . $ad->signature) }}" alt="" style="width:100px;">
            <h4>: <b>{{ $ad->name != null ? $ad->name : '' }}</b></h4>
        </div>

    </div>
@endsection
