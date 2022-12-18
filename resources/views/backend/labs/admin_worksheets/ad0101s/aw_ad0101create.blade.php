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
                            <button type="button" class="btn btn-md btn-primary btn-theme"><i class="fas fa-list"></i>
                                <b>List</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card btn-theme text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>FIDSL-Ad-01-01</b></h4>
                    </div>

                    <form action="{{ route('aw-ad0101.store') }}" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Company's Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="company_name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Customer Name</label>

                                        <div class="col-sm-8">
                                            <select name="customer_id" class="form-control myselect">
                                                <option>Select an option...</option>
                                                @foreach ($customers as $customer)
                                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Address</label>

                                        <div class="col-sm-8">
                                            <textarea name="address" id="address" cols="30" rows="1" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Contact Person</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="contact_person" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Name/Code</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_name_code" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Description of Sample</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="liquid" name="sample_description" value="Liquid">
                                            <label for="liquid" class="mr-2">Liquid</label>

                                            <input type="radio" id="dried" name="sample_description" value="Dried">
                                            <label for="dried" class="mr-2">Dried</label>

                                            <input type="radio" id="powder" name="sample_description" value="Powder">
                                            <label for="powder">Powder</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Packaging Type</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="paste" name="package_type" value="Paste">
                                            <label for="paste" class="mr-2">Paste</label>

                                            <input type="radio" id="raw" name="package_type" value="Raw">
                                            <label for="raw" class="mr-2">Raw</label>

                                            <input type="radio" id="packet" name="package_type" value="Packet">
                                            <label for="packet">Packet</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Type of Request</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="testing" name="request_type" value="Testing">
                                            <label for="testing" class="mr-2">Testing</label>

                                            <input type="radio" id="survey" name="request_type" value="Survey">
                                            <label for="survey" class="mr-2">Survey</label>

                                            <input type="radio" id="complaint" name="request_type" value="Complaint">
                                            <label for="complaint">Complaint</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sampling Procedure</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="submitted" name="sampling_procedure"
                                                value="Submitted">
                                            <label for="submitted" class="mr-2">Submitted</label>

                                            <input type="radio" id="not_submitted" name="sampling_procedure"
                                                value="Not-Submitted">
                                            <label for="not_submitted" class="mr-2">Not Submitted</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Decision Rule</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="request" name="decision_rule" value="Request">
                                            <label for="request" class="mr-2">Request</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Type of Test and Method</label>

                                        <div class="col-sm-8">
                                            <input type="radio" id="fidsl" name="test_method" value="FIDSL">
                                            <label for="fidsl" class="mr-2">FIDSL</label>

                                            <input type="radio" id="other" name="test_method" value="Other">
                                            <label for="other" class="mr-2">Other</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Quantity</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_quantity" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Test Fee Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="tf_received_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="sample_received_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Sample Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sample_number" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Quality</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="received_quality" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Temperature on Sample Arrival</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="temperature_sa" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Physical Condition of Sample
                                            Package</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="physical_sp" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Assigned for Lab Report</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="lab_report_date" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control">
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
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <input type="hidden" class="form-control" name="aw_branch" value="ad0101">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 my-0 text-center">
                                    <button type="submit" class="btn btn-md btn-success w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Submit</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
