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
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card btn-theme text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>FIDSL-Ad-01-01 (Edit)</b></h4>
                    </div>

                    <form action="{{ route('aw-ad0101.update', $ad->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Company's Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="company_name" class="form-control"
                                                value="{{ $ad->company_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Customer Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="customer_id" class="form-control"
                                                value="{{ $ad->customer_id }}">

                                            {{-- <select name="customer_id" class="form-control myselect">
                                                <option>Select an option...</option>
                                                @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}"
                                                        @if ($customer->id == $ad->customer_id) selected @endif>
                                                        {{ $customer->name }}</option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Customer's Signature</label>

                                        <div class="col-sm-8">
                                            <input type="file" name="cus_sign" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Address</label>

                                        <div class="col-sm-8">
                                            <textarea name="address" id="address" cols="30" rows="1" class="form-control">{{ $ad->address }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Contact Person</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="contact_person" class="form-control"
                                                value="{{ $ad->contact_person }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name/Code</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name_code" class="form-control"
                                                value="{{ $ad->sample_name_code }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Description of Sample</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="liquid" name="sample_description" value="Liquid"
                                                @if ($ad->sample_description == 'Liquid') checked @endif>
                                            <label for="liquid" class="mr-2">Liquid</label>

                                            <input type="radio" id="dried" name="sample_description" value="Dried"
                                                @if ($ad->sample_description == 'Dried') checked @endif>
                                            <label for="dried" class="mr-2">Dried</label>

                                            <input type="radio" id="powder" name="sample_description" value="Powder"
                                                @if ($ad->sample_description == 'Powder') checked @endif>
                                            <label for="powder">Powder</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Packaging Type</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="paste" name="package_type" value="Paste"
                                                @if ($ad->package_type == 'Paste') checked @endif>
                                            <label for="paste" class="mr-2">Paste</label>

                                            <input type="radio" id="raw" name="package_type" value="Raw"
                                                @if ($ad->package_type == 'Raw') checked @endif>
                                            <label for="raw" class="mr-2">Raw</label>

                                            <input type="radio" id="packet" name="package_type" value="Packet"
                                                @if ($ad->package_type == 'Packet') checked @endif>
                                            <label for="packet">Packet</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Type of Request</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="testing" name="request_type" value="Testing"
                                                @if ($ad->request_type == 'Testing') checked @endif>
                                            <label for="testing" class="mr-2">Testing</label>

                                            <input type="radio" id="survey" name="request_type" value="Survey"
                                                @if ($ad->request_type == 'Survey') checked @endif>
                                            <label for="survey" class="mr-2">Survey</label>

                                            <input type="radio" id="complaint" name="request_type" value="Complaint"
                                                @if ($ad->request_type == 'Complaint') checked @endif>
                                            <label for="complaint">Complaint</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sampling Procedure</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="submitted" name="sampling_procedure"
                                                value="Submitted" @if ($ad->sampling_procedure == 'Submitted') checked @endif>
                                            <label for="submitted" class="mr-2">Submitted</label>

                                            <input type="radio" id="not_submitted" name="sampling_procedure"
                                                value="Not-Submitted" @if ($ad->sampling_procedure == 'Not-Submitted') checked @endif>
                                            <label for="not_submitted" class="mr-2">Not Submitted</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Decision Rule</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="request" name="decision_rule" value="Request"
                                                @if ($ad->decision_rule == 'Request') checked @endif>
                                            <label for="request" class="mr-2">Request</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Type of Test and Method</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="fidsl" name="test_method" value="FIDSL"
                                                @if ($ad->test_method == 'FIDSL') checked @endif>
                                            <label for="fidsl" class="mr-2">FIDSL</label>

                                            <input type="radio" id="other" name="test_method" value="Other"
                                                @if ($ad->test_method == 'Other') checked @endif>
                                            <label for="other" class="mr-2">Other</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Quantity</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_quantity" class="form-control"
                                                value="{{ $ad->sample_quantity }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Test Fee Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="tf_received_date" class="form-control"
                                                value="{{ $ad->tf_received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="sample_received_date" class="form-control"
                                                value="{{ $ad->sample_received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_number" class="form-control"
                                                value="{{ $ad->sample_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Quality</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="received_quality" class="form-control"
                                                value="{{ $ad->received_quality }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Temperature on Sample Arrival</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="temperature_sa" class="form-control"
                                                value="{{ $ad->temperature_sa }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Physical Condition of Sample
                                            Package</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="physical_sp" class="form-control"
                                                value="{{ $ad->physical_sp }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Assigned for Lab Report</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="lab_report_date" class="form-control"
                                                value="{{ $ad->lab_report_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control"
                                                value="{{ $ad->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Signature</label>

                                        <div class="col-sm-8">
                                            <input type="file" name="signature" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $ad->name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 my-0 text-center">
                                    <button type="submit" class="btn btn-md btn-success w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Update</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
