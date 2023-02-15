@extends('backend.main')

@section('lab-active', 'active')

@section('ad-0201-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('aw-ad0201.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme mr-1"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 my-3">
                <h4 class="text-center"><b>Food Industries Development Supporting Laboratory- FIDSL</b></h4>
            </div>

            <div class="col-sm-10">
                <h5 class="text-center"><b>SAMPLE CONTROL FORM</b></h5>
            </div>

            <div class="col-sm-2">
                <p class="border text-center p-2"><b>FIDSL-Ad-02-01</b></p>
            </div>

            <div class="col-sm-4">
                <ol>
                    <li>Job Number</li>
                    <li>Customer Name</li>
                    <li>Sample Name I Code</li>
                    <li>Sample Description</li>
                    <ul style="list-style-type:square">
                        <li>Sample Type</li>
                        <li>Sample Amount</li>
                        <li>Temperature on Arrival</li>
                        <li>Packaging Type</li>
                        <li>Physical Condition of Package</li>
                    </ul>
                    <li>Admin Receiver</li>
                    <li>Date Received by Admin</li>
                    <li>Date Received by Lab</li>
                    <li>Lab. Receiver</li>
                    <li>Lab. Received</li>
                    <li>Method of Storage</li>
                    <li>Type of Test</li>
                    <li>Duration to be performed</li>
                    <li>Sample Disposal Date</li>
                </ol>
            </div>

            <div class="col-sm-8">
                <ul class="list-unstyled">
                    <li>: {{ $ad->job_number != null ? $ad->job_number : '-' }}</li>
                    <li>: {{ $ad->customer_id != null ? $ad->customer_id : '-' }}</li>
                    <li>: {{ $ad->sample_name_code != null ? $ad->sample_name_code : '-' }}</li>
                    <li>: {{ $ad->sample_description != null ? $ad->sample_description : '-' }}</li>
                    <li>: {{ $ad->sample_type != null ? $ad->sample_type : '-' }}</li>
                    <li>: {{ $ad->sample_amount != null ? $ad->sample_amount : '-' }}</li>
                    <li>: {{ $ad->arrival_temperature != null ? $ad->arrival_temperature : '-' }}</li>
                    <li>: {{ $ad->pakaging_type != null ? $ad->pakaging_type : '-' }}</li>
                    <li>: {{ $ad->physical_condition_package != null ? $ad->physical_condition_package : '-' }}</li>
                    <li>: {{ $ad->admin_receiver != null ? $ad->admin_receiver : '-' }}</li>
                    <li>: {{ $ad->admin_date_received != null ? date('d-M-Y', strtotime($ad->admin_date_received)) : '-' }}
                    </li>
                    <li>: {{ $ad->lab_date_received != null ? date('d-M-Y', strtotime($ad->lab_date_received)) : '-' }}
                    </li>
                    <li>: {{ $ad->lab_receiver != null ? $ad->lab_receiver : '-' }}</li>
                    <li>: {{ $ad->lab_received != null ? $ad->lab_received : '-' }}</li>
                    <li>: {{ $ad->storage_method != null ? $ad->storage_method : '-' }}</li>
                    <li>: {{ $ad->test_type != null ? $ad->test_type : '-' }}</li>
                    <li>: {{ $ad->performed_duration != null ? $ad->performed_duration : '-' }}</li>
                    <li>: {{ $ad->disposal_date != null ? date('d-M-Y', strtotime($ad->disposal_date)) : '-' }}</li>

                </ul>

            </div>

            <div class="col-sm-6">
                <span>Prepared by: <b>{{ $ad->prepared_by }}</b></span>
            </div>

            <div class="col-sm-6">
                <span>Verified by: <b>{{ $ad->verified_by }}</b></span>
            </div>

            <div class="col-sm-6">
                <span>Position: <b>{{ $ad->prepared_position }}</b></span>
            </div>

            <div class="col-sm-6">
                <span>Position: <b>{{ $ad->verified_position }}</b></span>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
