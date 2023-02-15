@extends('backend.main')

@section('lab-active', 'active')

@section('oil-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('oils.index') }}">
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
                <p class="border text-center p-2"><b>{{ $oil->title }}</b></p>
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
                    <li>: {{ $oil->company_name != null ? $oil->company_name : '-' }}</li>
                    <li>: {{ $oil->address != null ? $oil->address : '-' }}</li>
                    <li>: {{ $oil->phone != null ? $oil->phone : '-' }}</li>
                    <li>:
                        {{ $oil->lab_received_date != null ? date('d-M-Y', strtotime($oil->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $oil->sample_number != null ? $oil->sample_number : '-' }}</li>
                    <li>: {{ $oil->product_name != null ? $oil->product_name : '-' }}</li>
                    <li>:
                        {{ $oil->test_performed_date != null ? date('d-M-Y', strtotime($oil->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $oil->test_type != null ? $oil->test_type : '-' }}</li>
                    <li>: {{ $oil->issue_date != null ? date('d-M-Y', strtotime($oil->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $oil->results != null ? $oil->results : '-' }}</li>
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
                            <td>{{ $oil->gravity_para }}</td>
                            <td>{{ $oil->gravity_method }}</td>
                            <td>{{ $oil->gravity_result }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $oil->index_para }}</td>
                            <td>{{ $oil->index_method }}</td>
                            <td>{{ $oil->index_result }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $oil->sapo_para }}</td>
                            <td>{{ $oil->sapo_method }}</td>
                            <td>{{ $oil->sapo_result }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $oil->unsapo_para }}</td>
                            <td>{{ $oil->unsapo_method }}</td>
                            <td>{{ $oil->unsapo_result }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $oil->iodine_para }}</td>
                            <td>{{ $oil->iodine_method }}</td>
                            <td>{{ $oil->iodine_result }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $oil->acid_para }}</td>
                            <td>{{ $oil->acid_method }}</td>
                            <td>{{ $oil->acid_result }}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>{{ $oil->peroxide_para }}</td>
                            <td>{{ $oil->peroxide_method }}</td>
                            <td>{{ $oil->peroxide_result }}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>{{ $oil->moisture_para }}</td>
                            <td>{{ $oil->moisture_method }}</td>
                            <td>{{ $oil->moisture_result }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $oil->method }}</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>oil Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $oil->energy_result }} kcal</p>
                        <p>Protein - {{ $oil->protein_result }} g</p>
                        <p>Fat - {{ $oil->fat_result }} g</p>
                        <p>Carbohydrate - {{ $oil->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $oil->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/cr_oils/' . $oil->sign) }}" alt=""
                        style="width:100px;"></span><br>
                {{-- <span>{{ $oil->date ? date('d-M-Y', strtotime($oil->date)) : '-' }}</b></span><br> --}}

                <span>{{ $oil->checked_name }}</b></span><br>

                <span>{{ $oil->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
