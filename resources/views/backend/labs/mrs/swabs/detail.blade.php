@extends('backend.main')

@section('lab-active', 'active')

@section('swab-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('swabs.index') }}">
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
                <p class="border text-center p-2"><b>{{ $swab->title }}</b></p>
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
                    <li>: {{ $swab->company_name != null ? $swab->company_name : '-' }}</li>
                    <li>: {{ $swab->address != null ? $swab->address : '-' }}</li>
                    <li>: {{ $swab->phone != null ? $swab->phone : '-' }}</li>
                    <li>:
                        {{ $swab->lab_received_date != null ? date('d-M-Y', strtotime($swab->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $swab->sample_number != null ? $swab->sample_number : '-' }}</li>
                    <li>: {{ $swab->product_name != null ? $swab->product_name : '-' }}</li>
                    <li>:
                        {{ $swab->test_performed_date != null ? date('d-M-Y', strtotime($swab->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $swab->test_type != null ? $swab->test_type : '-' }}</li>
                    <li>: {{ $swab->issue_date != null ? date('d-M-Y', strtotime($swab->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $swab->results != null ? $swab->results : '-' }}</li>
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
                            <td>{{ $swab->apc_para }}</td>
                            <td>{{ $swab->apc_method }}</td>
                            <td>{{ $swab->apc_result }}</td>
                            <td>{{ $swab->apc_before }}</td>
                            <td>{{ $swab->apc_after }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $swab->coliform_para }}</td>
                            <td>{{ $swab->coliform_method }}</td>
                            <td>{{ $swab->coliform_result }}</td>
                            <td>{{ $swab->coliform_before }}</td>
                            <td>{{ $swab->coliform_after }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $swab->coli_para }}</td>
                            <td>{{ $swab->coli_method }}</td>
                            <td>{{ $swab->coli_result }}</td>
                            <td>{{ $swab->coli_before }}</td>
                            <td>{{ $swab->coli_after }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $swab->staphy_para }}</td>
                            <td>{{ $swab->staphy_method }}</td>
                            <td>{{ $swab->staphy_result }}</td>
                            <td>{{ $swab->staphy_before }}</td>
                            <td>{{ $swab->staphy_after }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $swab->salmo_para }}</td>
                            <td>{{ $swab->salmo_method }}</td>
                            <td>{{ $swab->salmo_result }}</td>
                            <td>{{ $swab->salmo_before }}</td>
                            <td>{{ $swab->salmo_after }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $swab->yeast_mould_para }}</td>
                            <td>{{ $swab->yeast_mould_method }}</td>
                            <td>{{ $swab->yeast_mould_result }}</td>
                            <td>{{ $swab->yeast_mould_before }}</td>
                            <td>{{ $swab->yeast_mould_after }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $swab->method }}</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>swab Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $swab->energy_result }} kcal</p>
                        <p>Protein - {{ $swab->protein_result }} g</p>
                        <p>Fat - {{ $swab->fat_result }} g</p>
                        <p>Carbohydrate - {{ $swab->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $swab->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/mr_swabs/' . $swab->sign) }}" alt=""
                        style="width:100px;"></span><br>
                <span>{{ $swab->date ? date('d-M-Y', strtotime($swab->date)) : '-' }}</b></span><br>

                <span>{{ $swab->checked_name }}</b></span><br>

                <span>{{ $swab->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
