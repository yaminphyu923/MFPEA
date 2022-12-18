@extends('backend.main')

@section('lab-active', 'active')

@section('ad-0101-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('aw-ad0101.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme mr-1"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 my-3">
                <h4 class="text-center"><b>Myanmar Food Processors and Exporters Association (MFPEA)</b></h4>
                <h4 class="text-center"><b>Food Industries Development Supporting Laboratory- FIDSL</b></h4>
            </div>

            <div class="col-sm-10">
                <h5 class="text-center"><b>ANALYSIS REQUEST FORM</b></h5>
            </div>

            <div class="col-sm-2">
                <p class="border text-center p-2"><b>FIDSL-Ad-01-01</b></p>
            </div>

            <div class="col-sm-12">
                <h4><b>I. To be filled by customer</b></h4>
            </div>

            <div class="col-sm-4">
                <ol>
                    <li>Company's Name</li>
                    {{-- <li>Customer's Name</li> --}}
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

            <div class="col-sm-8">
                <ul class="list-unstyled">
                    <li>: {{ $ad->company_name != null ? $ad->company_name : '' }}</li>
                    {{-- <li>: {{ $ad->customer != null ? $ad->customer->name : '' }}</li> --}}
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

            <div class="col-sm-12 mt-3">
                <h4><b>II. To be filled by Laboratory</b></h4>
            </div>

            <div class="col-sm-4">
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

            <div class="col-sm-8">
                <ul class="list-unstyled">
                    <li>: {{ $ad->tf_received_date != null ? date('d-M-Y', strtotime($ad->tf_received_date)) : '-' }}</li>
                    <li>:
                        {{ $ad->sample_received_date != null ? date('d-M-Y', strtotime($ad->sample_received_date)) : '-' }}
                    </li>
                    <li>: {{ $ad->sample_number != null ? $ad->sample_number : '-' }}</li>
                    <li>: {{ $ad->received_quality != null ? $ad->received_quality : '-' }}</li>
                    <li>: {{ $ad->temperature_sa != null ? $ad->temperature_sa : '-' }}</li>
                    <li>: {{ $ad->physical_sp != null ? $ad->physical_sp : '-' }}</li>
                    <li>: {{ $ad->lab_report_date != null ? date('d-M-Y', strtotime($ad->lab_report_date)) : '-' }}</li>
                </ul>

            </div>

            <div class="col-sm-4">
                <p class="border p-2"><b>Job Number - {{ $ad->job_number }}</b></p>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p>Signature : <img src="{{ asset('photos/aw0101s/' . $ad->signature) }}" alt=""
                        style="width:100px;">
                </p>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p>Name : <b>{{ $ad->name }}</b></p>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
