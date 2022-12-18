@extends('backend.main')

@section('lab-active', 'active')

@section('ad01357-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('ad01357s.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 my-3">
                <h4 class="text-center"><b>Myanmar Food Processors and Exporters Association</b></h4>
            </div>

            <div class="col-sm-9">
                <h5 class="text-center"><b>Food Industries Development Supporting Laboratory</b></h5>
                <h6 class="text-center">LABORATORY ANALYSIS REPORT</h6>
            </div>

            <div class="col-sm-3">
                <p class="border text-center p-2"><b>FIDSL-Ad-06-03-01357 / 22 </b></p>
            </div>


            <div class="col-sm-3">
                <ol>
                    <li>Company Name</li>
                    <li>Address</li>
                    <li>Phone</li>
                    <li>Lab Received Date</li>
                    <li>Sample Number</li>
                    <li>Product Name</li>
                    <li>Test Performed Date</li>
                    <li>Consignee</li>
                    <li>Quantity</li>
                    <li>Packing</li>
                    <li>Port of Loading</li>
                    <li>Port of Discharge</li>
                    <li>Vessel Name</li>
                    <li>EORI</li>
                    <li>H.S Code</li>
                    <li>PO Number</li>
                    <li>Sample Taken By</li>
                    <li>Test Type</li>
                    <li>Issue Date</li>
                    <li>Results</li>
                    <li>Customer</li>
                </ol>
            </div>

            <div class="col-sm-9">
                <ul class="list-unstyled">
                    <li>: {{ $ad->company_name != null ? $ad->company_name : '-' }}</li>
                    <li>: {{ $ad->address != null ? $ad->address : '-' }}</li>
                    <li>: {{ $ad->phone != null ? $ad->phone : '-' }}</li>
                    <li>: {{ $ad->lab_received_date != null ? date('d-M-Y', strtotime($ad->lab_received_date)) : '-' }}</li>
                    <li>: {{ $ad->sample_number != null ? $ad->sample_number : '-' }}</li>
                    <li>: {{ $ad->product_name != null ? $ad->product_name : '-' }}</li>
                    <li>: {{ $ad->test_performed_date != null ? date('d-M-Y', strtotime($ad->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $ad->consignee != null ? $ad->consignee : '-' }}</li>
                    <li>: {{ $ad->quantity != null ? $ad->quantity : '-' }}</li>
                    <li>: {{ $ad->packing != null ? $ad->packing : '-' }}</li>
                    <li>: {{ $ad->loading != null ? $ad->loading : '-' }}</li>
                    <li>: {{ $ad->discharge != null ? $ad->discharge : '-' }}</li>
                    <li>: {{ $ad->vessel_name != null ? $ad->vessel_name : '-' }}</li>
                    <li>: {{ $ad->eori != null ? $ad->eori : '-' }}</li>
                    <li>: {{ $ad->hscode != null ? $ad->hscode : '-' }}</li>
                    <li>: {{ $ad->ponumber != null ? $ad->ponumber : '-' }}</li>
                    <li>: {{ $ad->sample_taken != null ? $ad->sample_taken : '-' }}</li>
                    <li>: {{ $ad->test_type != null ? $ad->test_type : '-' }}</li>
                    <li>: {{ $ad->issue_date != null ? date('d-M-Y', strtotime($ad->issue_date)) : '-' }}</li>
                    <li>: {{ $ad->results != null ? $ad->results : '-' }}</li>
                    <li>: {{ $ad->customer != null ? $ad->customer->name : '-' }}</li>
                </ul>

            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
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
            </div>


            <div class="col-sm-12 mt-3">
                <h5>ND = Not Detectable</h5>
                <h5>cfu = Colony Forming Unit</h5>
                <span>Method : {{ $ad->method }}</span>

            </div>

            <div class="col-sm-6 my-3">
                <span>Sign: <img src="{{ asset('photos/mr_ad01357s/' . $ad->sign) }}" alt=""
                        style="width:100px;"></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>{{ $ad->checked_name }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
