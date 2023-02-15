@extends('backend.main')

@section('lab-active', 'active')

@section('heavy_metal-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('heavy_metals.index') }}">
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
                <p class="border text-center p-2"><b>{{ $heavy_metal->title }}</b></p>
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
                    <li>: {{ $heavy_metal->company_name != null ? $heavy_metal->company_name : '-' }}</li>
                    <li>: {{ $heavy_metal->address != null ? $heavy_metal->address : '-' }}</li>
                    <li>: {{ $heavy_metal->phone != null ? $heavy_metal->phone : '-' }}</li>
                    <li>:
                        {{ $heavy_metal->lab_received_date != null ? date('d-M-Y', strtotime($heavy_metal->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $heavy_metal->sample_number != null ? $heavy_metal->sample_number : '-' }}</li>
                    <li>: {{ $heavy_metal->product_name != null ? $heavy_metal->product_name : '-' }}</li>
                    <li>:
                        {{ $heavy_metal->test_performed_date != null ? date('d-M-Y', strtotime($heavy_metal->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $heavy_metal->test_type != null ? $heavy_metal->test_type : '-' }}</li>
                    <li>: {{ $heavy_metal->issue_date != null ? date('d-M-Y', strtotime($heavy_metal->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $heavy_metal->results != null ? $heavy_metal->results : '-' }}</li>
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
                            <th>Unit</th>
                            <th>Limit of Detection</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>{{ $heavy_metal->as_para }}</td>
                            <td>{{ $heavy_metal->as_method }}</td>
                            <td>{{ $heavy_metal->as_result }}</td>
                            <td>{{ $heavy_metal->as_unit }}</td>
                            <td>{{ $heavy_metal->as_limit }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $heavy_metal->pb_para }}</td>
                            <td>{{ $heavy_metal->pb_method }}</td>
                            <td>{{ $heavy_metal->pb_result }}</td>
                            <td>{{ $heavy_metal->pb_unit }}</td>
                            <td>{{ $heavy_metal->pb_limit }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $heavy_metal->cu_para }}</td>
                            <td>{{ $heavy_metal->cu_method }}</td>
                            <td>{{ $heavy_metal->cu_result }}</td>
                            <td>{{ $heavy_metal->cu_unit }}</td>
                            <td>{{ $heavy_metal->cu_limit }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $heavy_metal->zn_para }}</td>
                            <td>{{ $heavy_metal->zn_method }}</td>
                            <td>{{ $heavy_metal->zn_result }}</td>
                            <td>{{ $heavy_metal->zn_unit }}</td>
                            <td>{{ $heavy_metal->zn_limit }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $heavy_metal->hg_para }}</td>
                            <td>{{ $heavy_metal->hg_method }}</td>
                            <td>{{ $heavy_metal->hg_result }}</td>
                            <td>{{ $heavy_metal->hg_unit }}</td>
                            <td>{{ $heavy_metal->hg_limit }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Remarks : ND = Not Detected</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>heavy_metal Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $heavy_metal->energy_result }} kcal</p>
                        <p>Protein - {{ $heavy_metal->protein_result }} g</p>
                        <p>Fat - {{ $heavy_metal->fat_result }} g</p>
                        <p>Carbohydrate - {{ $heavy_metal->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $heavy_metal->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/cr_heavy_metals/' . $heavy_metal->sign) }}" alt=""
                        style="width:100px;"></span><br>
                <span>{{ $heavy_metal->date ? date('d-M-Y', strtotime($heavy_metal->date)) : '-' }}</b></span><br>

                <span>{{ $heavy_metal->checked_name }}</b></span><br>

                <span>{{ $heavy_metal->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
