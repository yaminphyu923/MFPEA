@extends('backend.main')

@section('lab-active', 'active')

@section('other-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('others.index') }}">
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
                <p class="border text-center p-2"><b>{{ $other->title }}</b></p>
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
                    <li>: {{ $other->company_name != null ? $other->company_name : '-' }}</li>
                    <li>: {{ $other->address != null ? $other->address : '-' }}</li>
                    <li>: {{ $other->phone != null ? $other->phone : '-' }}</li>
                    <li>:
                        {{ $other->lab_received_date != null ? date('d-M-Y', strtotime($other->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $other->sample_number != null ? $other->sample_number : '-' }}</li>
                    <li>: {{ $other->product_name != null ? $other->product_name : '-' }}</li>
                    <li>:
                        {{ $other->test_performed_date != null ? date('d-M-Y', strtotime($other->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $other->test_type != null ? $other->test_type : '-' }}</li>
                    <li>: {{ $other->issue_date != null ? date('d-M-Y', strtotime($other->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $other->results != null ? $other->results : '-' }}</li>
                </ul>

            </div>

            <h6><i>(This laboratory analysis report is based solely on the sample(s) submitted by the customer.)</i></h6>
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
                        @foreach ($other_tests as $other_test)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $other_test->test_parameter }}</td>
                                <td>{{ $other_test->test_method }}</td>
                                <td>{{ $other_test->result }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $other->method }}</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>other Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $other->energy_result }} kcal</p>
                        <p>Protein - {{ $other->protein_result }} g</p>
                        <p>Fat - {{ $other->fat_result }} g</p>
                        <p>Carbohydrate - {{ $other->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $other->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/cr_others/' . $other->sign) }}" alt=""
                        style="width:100px;"></span><br>
                {{-- <span>{{ $other->date ? date('d-M-Y', strtotime($other->date)) : '-' }}</b></span><br> --}}

                <span>{{ $other->checked_name }}</b></span><br>

                <span>{{ $other->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
