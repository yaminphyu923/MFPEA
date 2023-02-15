@extends('backend.main')

@section('lab-active', 'active')

@section('other_sample-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('other_samples.index') }}">
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
                <p class="border text-center p-2"><b>{{ $other_sample->title }}</b></p>
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
                    <li>: {{ $other_sample->company_name != null ? $other_sample->company_name : '-' }}</li>
                    <li>: {{ $other_sample->address != null ? $other_sample->address : '-' }}</li>
                    <li>: {{ $other_sample->phone != null ? $other_sample->phone : '-' }}</li>
                    <li>:
                        {{ $other_sample->lab_received_date != null ? date('d-M-Y', strtotime($other_sample->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $other_sample->sample_number != null ? $other_sample->sample_number : '-' }}</li>
                    <li>: {{ $other_sample->product_name != null ? $other_sample->product_name : '-' }}</li>
                    <li>:
                        {{ $other_sample->test_performed_date != null ? date('d-M-Y', strtotime($other_sample->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $other_sample->test_type != null ? $other_sample->test_type : '-' }}</li>
                    <li>:
                        {{ $other_sample->issue_date != null ? date('d-M-Y', strtotime($other_sample->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $other_sample->results != null ? $other_sample->results : '-' }}</li>
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
                            <td>{{ $other_sample->apc_para }}</td>
                            <td>{{ $other_sample->apc_method }}</td>
                            <td>{{ $other_sample->apc_result }}</td>
                            <td>{{ $other_sample->apc_before }}</td>
                            <td>{{ $other_sample->apc_after }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $other_sample->coliform_para }}</td>
                            <td>{{ $other_sample->coliform_method }}</td>
                            <td>{{ $other_sample->coliform_result }}</td>
                            <td>{{ $other_sample->coliform_before }}</td>
                            <td>{{ $other_sample->coliform_after }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $other_sample->coli_para }}</td>
                            <td>{{ $other_sample->coli_method }}</td>
                            <td>{{ $other_sample->coli_result }}</td>
                            <td>{{ $other_sample->coli_before }}</td>
                            <td>{{ $other_sample->coli_after }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $other_sample->staphy_para }}</td>
                            <td>{{ $other_sample->staphy_method }}</td>
                            <td>{{ $other_sample->staphy_result }}</td>
                            <td>{{ $other_sample->staphy_before }}</td>
                            <td>{{ $other_sample->staphy_after }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $other_sample->salmo_para }}</td>
                            <td>{{ $other_sample->salmo_method }}</td>
                            <td>{{ $other_sample->salmo_result }}</td>
                            <td>{{ $other_sample->salmo_before }}</td>
                            <td>{{ $other_sample->salmo_after }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $other_sample->yeast_mould_para }}</td>
                            <td>{{ $other_sample->yeast_mould_method }}</td>
                            <td>{{ $other_sample->yeast_mould_result }}</td>
                            <td>{{ $other_sample->yeast_mould_before }}</td>
                            <td>{{ $other_sample->yeast_mould_after }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $other_sample->method }}</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>other_sample Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $other_sample->energy_result }} kcal</p>
                        <p>Protein - {{ $other_sample->protein_result }} g</p>
                        <p>Fat - {{ $other_sample->fat_result }} g</p>
                        <p>Carbohydrate - {{ $other_sample->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $other_sample->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/mr_other_samples/' . $other_sample->sign) }}" alt=""
                        style="width:100px;"></span><br>
                <span>{{ $other_sample->date ? date('d-M-Y', strtotime($other_sample->date)) : '-' }}</b></span><br>

                <span>{{ $other_sample->checked_name }}</b></span><br>

                <span>{{ $other_sample->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
