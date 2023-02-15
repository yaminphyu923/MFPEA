@extends('backend.main')

@section('lab-active', 'active')

@section('nutrition-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('nutritions.index') }}">
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
                <p class="border text-center p-2"><b>{{ $nutrition->title }}</b></p>
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
                    <li>: {{ $nutrition->company_name != null ? $nutrition->company_name : '-' }}</li>
                    <li>: {{ $nutrition->address != null ? $nutrition->address : '-' }}</li>
                    <li>: {{ $nutrition->phone != null ? $nutrition->phone : '-' }}</li>
                    <li>:
                        {{ $nutrition->lab_received_date != null ? date('d-M-Y', strtotime($nutrition->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $nutrition->sample_number != null ? $nutrition->sample_number : '-' }}</li>
                    <li>: {{ $nutrition->product_name != null ? $nutrition->product_name : '-' }}</li>
                    <li>:
                        {{ $nutrition->test_performed_date != null ? date('d-M-Y', strtotime($nutrition->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $nutrition->test_type != null ? $nutrition->test_type : '-' }}</li>
                    <li>: {{ $nutrition->issue_date != null ? date('d-M-Y', strtotime($nutrition->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $nutrition->results != null ? $nutrition->results : '-' }}</li>
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
                            <td>{{ $nutrition->moisture_para }}</td>
                            <td>{{ $nutrition->moisture_method }}</td>
                            <td>{{ $nutrition->moisture_result }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $nutrition->ash_para }}</td>
                            <td>{{ $nutrition->ash_method }}</td>
                            <td>{{ $nutrition->ash_result }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $nutrition->protein_para }}</td>
                            <td>{{ $nutrition->protein_method }}</td>
                            <td>{{ $nutrition->protein_result }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $nutrition->fiber_para }}</td>
                            <td>{{ $nutrition->fiber_method }}</td>
                            <td>{{ $nutrition->fiber_result }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $nutrition->fat_para }}</td>
                            <td>{{ $nutrition->fat_method }}</td>
                            <td>{{ $nutrition->fat_result }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $nutrition->carbo_para }}</td>
                            <td>{{ $nutrition->carbo_method }}</td>
                            <td>{{ $nutrition->carbo_result }}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>{{ $nutrition->energy_para }}</td>
                            <td>{{ $nutrition->energy_method }}</td>
                            <td>{{ $nutrition->energy_result }}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>{{ $nutrition->sodium_para }}</td>
                            <td>{{ $nutrition->sodium_method }}</td>
                            <td>{{ $nutrition->sodium_result }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $nutrition->method }}</span>

                <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>Nutrition Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $nutrition->energy_result }} kcal</p>
                        <p>Protein - {{ $nutrition->protein_result }} g</p>
                        <p>Fat - {{ $nutrition->fat_result }} g</p>
                        <p>Carbohydrate - {{ $nutrition->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $nutrition->sodium_result }} g</p>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/cr_nutritions/' . $nutrition->sign) }}" alt=""
                        style="width:100px;"></span><br>
                <span>{{ $nutrition->date ? date('d-M-Y', strtotime($nutrition->date)) : '-' }}</b></span><br>

                <span>{{ $nutrition->checked_name }}</b></span><br>

                <span>{{ $nutrition->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
