@extends('backend.main')

@section('lab-active', 'active')

@section('water-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('waters.index') }}">
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
                <p class="border text-center p-2"><b>{{ $water->title }}</b></p>
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
                    <li>: {{ $water->company_name != null ? $water->company_name : '-' }}</li>
                    <li>: {{ $water->address != null ? $water->address : '-' }}</li>
                    <li>: {{ $water->phone != null ? $water->phone : '-' }}</li>
                    <li>:
                        {{ $water->lab_received_date != null ? date('d-M-Y', strtotime($water->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $water->sample_number != null ? $water->sample_number : '-' }}</li>
                    <li>: {{ $water->product_name != null ? $water->product_name : '-' }}</li>
                    <li>:
                        {{ $water->test_performed_date != null ? date('d-M-Y', strtotime($water->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $water->test_type != null ? $water->test_type : '-' }}</li>
                    <li>: {{ $water->issue_date != null ? date('d-M-Y', strtotime($water->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $water->results != null ? $water->results : '-' }}</li>
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

                        <tr>
                            <td>1</td>
                            <td>{{ $water->total_para }}</td>
                            <td>{{ $water->total_method }}</td>
                            <td>{{ $water->total_result }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $water->calcium_para }}</td>
                            <td>{{ $water->calcium_method }}</td>
                            <td>{{ $water->calcium_result }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $water->mag_para }}</td>
                            <td>{{ $water->mag_method }}</td>
                            <td>{{ $water->mag_result }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $water->solid_para }}</td>
                            <td>{{ $water->solid_method }}</td>
                            <td>{{ $water->solid_result }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $water->dissolved_para }}</td>
                            <td>{{ $water->dissolved_method }}</td>
                            <td>{{ $water->dissolved_result }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $water->suspended_para }}</td>
                            <td>{{ $water->suspended_method }}</td>
                            <td>{{ $water->suspended_result }}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>{{ $water->ph_para }}</td>
                            <td>{{ $water->ph_method }}</td>
                            <td>{{ $water->ph_result }}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>{{ $water->conductivity_para }}</td>
                            <td>{{ $water->conductivity_method }}</td>
                            <td>{{ $water->conductivity_result }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $water->method }}</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>water Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $water->energy_result }} kcal</p>
                        <p>Protein - {{ $water->protein_result }} g</p>
                        <p>Fat - {{ $water->fat_result }} g</p>
                        <p>Carbohydrate - {{ $water->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $water->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/cr_waters/' . $water->sign) }}" alt=""
                        style="width:100px;"></span><br>
                <span>{{ $water->date ? date('d-M-Y', strtotime($water->date)) : '-' }}</b></span><br>

                <span>{{ $water->checked_name }}</b></span><br>

                <span>{{ $water->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
