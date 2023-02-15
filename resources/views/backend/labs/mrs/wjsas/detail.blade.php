@extends('backend.main')

@section('lab-active', 'active')

@section('wjsa-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('wjsas.index') }}">
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
                <p class="border text-center p-2"><b>{{ $wjsa->title }}</b></p>
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
                    <li>: {{ $wjsa->company_name != null ? $wjsa->company_name : '-' }}</li>
                    <li>: {{ $wjsa->address != null ? $wjsa->address : '-' }}</li>
                    <li>: {{ $wjsa->phone != null ? $wjsa->phone : '-' }}</li>
                    <li>:
                        {{ $wjsa->lab_received_date != null ? date('d-M-Y', strtotime($wjsa->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $wjsa->sample_number != null ? $wjsa->sample_number : '-' }}</li>
                    <li>: {{ $wjsa->product_name != null ? $wjsa->product_name : '-' }}</li>
                    <li>:
                        {{ $wjsa->test_performed_date != null ? date('d-M-Y', strtotime($wjsa->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $wjsa->test_type != null ? $wjsa->test_type : '-' }}</li>
                    <li>: {{ $wjsa->issue_date != null ? date('d-M-Y', strtotime($wjsa->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $wjsa->results != null ? $wjsa->results : '-' }}</li>
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
                            <th>Before Result</th>
                            <th>After Result</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>{{ $wjsa->apc_para }}</td>
                            <td>{{ $wjsa->apc_method }}</td>
                            <td>{{ $wjsa->apc_result }}</td>
                            <td>{{ $wjsa->apc_before }}</td>
                            <td>{{ $wjsa->apc_after }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $wjsa->coliform_para }}</td>
                            <td>{{ $wjsa->coliform_method }}</td>
                            <td>{{ $wjsa->coliform_result }}</td>
                            <td>{{ $wjsa->coliform_before }}</td>
                            <td>{{ $wjsa->coliform_after }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $wjsa->coli_para }}</td>
                            <td>{{ $wjsa->coli_method }}</td>
                            <td>{{ $wjsa->coli_result }}</td>
                            <td>{{ $wjsa->coli_before }}</td>
                            <td>{{ $wjsa->coli_after }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $wjsa->staphy_para }}</td>
                            <td>{{ $wjsa->staphy_method }}</td>
                            <td>{{ $wjsa->staphy_result }}</td>
                            <td>{{ $wjsa->staphy_before }}</td>
                            <td>{{ $wjsa->staphy_after }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $wjsa->salmo_para }}</td>
                            <td>{{ $wjsa->salmo_method }}</td>
                            <td>{{ $wjsa->salmo_result }}</td>
                            <td>{{ $wjsa->salmo_before }}</td>
                            <td>{{ $wjsa->salmo_after }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $wjsa->yeast_mould_para }}</td>
                            <td>{{ $wjsa->yeast_mould_method }}</td>
                            <td>{{ $wjsa->yeast_mould_result }}</td>
                            <td>{{ $wjsa->yeast_mould_before }}</td>
                            <td>{{ $wjsa->yeast_mould_after }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $wjsa->method }}</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>wjsa Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $wjsa->energy_result }} kcal</p>
                        <p>Protein - {{ $wjsa->protein_result }} g</p>
                        <p>Fat - {{ $wjsa->fat_result }} g</p>
                        <p>Carbohydrate - {{ $wjsa->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $wjsa->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/mr_wjsas/' . $wjsa->sign) }}" alt=""
                        style="width:100px;"></span><br>
                <span>{{ $wjsa->date ? date('d-M-Y', strtotime($wjsa->date)) : '-' }}</b></span><br>

                <span>{{ $wjsa->checked_name }}</b></span><br>

                <span>{{ $wjsa->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
