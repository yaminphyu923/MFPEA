@extends('backend.main')

@section('lab-active', 'active')

@section('ad01087-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('ad01087s.index') }}">
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
                <p class="border text-center p-2"><b>FIDSL-Ad-06-03-01087 / 22 </b></p>
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
                    <li>Test Type</li>
                    <li>Issue Date</li>
                    <li>Results</li>
                </ol>
            </div>

            <div class="col-sm-9">
                <ul class="list-unstyled">
                    <li>: {{ $ad->company_name != null ? $ad->company_name : '-' }}</li>
                    <li>: {{ $ad->address != null ? $ad->address : '-' }}</li>
                    <li>: {{ $ad->phone != null ? $ad->phone : '-' }}</li>
                    <li>: {{ $ad->lab_received_date != null ? date('d-M-Y', strtotime($ad->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $ad->sample_number != null ? $ad->sample_number : '-' }}</li>
                    <li>: {{ $ad->product_name != null ? $ad->product_name : '-' }}</li>
                    <li>: {{ $ad->test_performed_date != null ? date('d-M-Y', strtotime($ad->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $ad->test_type != null ? $ad->test_type : '-' }}</li>
                    <li>: {{ $ad->issue_date != null ? date('d-M-Y', strtotime($ad->issue_date)) : '-' }}</li>
                    <li>: {{ $ad->results != null ? $ad->results : '-' }}</li>
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
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ad_tests as $ad_test)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $ad_test->test_parameter }}</td>
                                <td>{{ $ad_test->test_method }}</td>
                                <td>{{ $ad_test->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">

                <span>Method : {{ $ad->method }}</span>

            </div>

            <div class="col-sm-6 my-3">
                <span>Sign: <img src="{{ asset('photos/cr_ad01087s/' . $ad->sign) }}" alt=""
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
