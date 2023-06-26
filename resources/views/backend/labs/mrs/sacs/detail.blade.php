@extends('backend.main')

@section('lab-active', 'active')

@section('sac-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('sacs.index') }}">
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
                <p class="border text-center p-2"><b>{{ $sac->title }}</b></p>
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
                    <li>: {{ $sac->company_name != null ? $sac->company_name : '-' }}</li>
                    <li>: {{ $sac->address != null ? $sac->address : '-' }}</li>
                    <li>: {{ $sac->phone != null ? $sac->phone : '-' }}</li>
                    <li>:
                        {{ $sac->lab_received_date != null ? date('d-M-Y', strtotime($sac->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $sac->sample_number != null ? $sac->sample_number : '-' }}</li>
                    <li>: {{ $sac->product_name != null ? $sac->product_name : '-' }}</li>
                    <li>:
                        {{ $sac->test_performed_date != null ? date('d-M-Y', strtotime($sac->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $sac->test_type != null ? $sac->test_type : '-' }}</li>
                    <li>: {{ $sac->issue_date != null ? date('d-M-Y', strtotime($sac->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $sac->results != null ? $sac->results : '-' }}</li>
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
                            <th>Reference Range</th>
                            <th>Reference Standard</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>{{ $sac->apc_para }}</td>
                            <td>{{ $sac->apc_method }}</td>
                            <td>{{ $sac->apc_result }}</td>
                            <td>{{ $sac->apc_before }}</td>
                            <td>{{ $sac->apc_after }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $sac->coliform_para }}</td>
                            <td>{{ $sac->coliform_method }}</td>
                            <td>{{ $sac->coliform_result }}</td>
                            <td>{{ $sac->coliform_before }}</td>
                            <td>{{ $sac->coliform_after }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $sac->coli_para }}</td>
                            <td>{{ $sac->coli_method }}</td>
                            <td>{{ $sac->coli_result }}</td>
                            <td>{{ $sac->coli_before }}</td>
                            <td>{{ $sac->coli_after }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $sac->staphy_para }}</td>
                            <td>{{ $sac->staphy_method }}</td>
                            <td>{{ $sac->staphy_result }}</td>
                            <td>{{ $sac->staphy_before }}</td>
                            <td>{{ $sac->staphy_after }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $sac->salmo_para }}</td>
                            <td>{{ $sac->salmo_method }}</td>
                            <td>{{ $sac->salmo_result }}</td>
                            <td>{{ $sac->salmo_before }}</td>
                            <td>{{ $sac->salmo_after }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $sac->yeast_mould_para }}</td>
                            <td>{{ $sac->yeast_mould_method }}</td>
                            <td>{{ $sac->yeast_mould_result }}</td>
                            <td>{{ $sac->yeast_mould_before }}</td>
                            <td>{{ $sac->yeast_mould_after }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $sac->method }}</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>sac Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $sac->energy_result }} kcal</p>
                        <p>Protein - {{ $sac->protein_result }} g</p>
                        <p>Fat - {{ $sac->fat_result }} g</p>
                        <p>Carbohydrate - {{ $sac->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $sac->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/mr_sacs/' . $sac->sign) }}" alt=""
                        style="width:100px;"></span><br>
                {{-- <span>{{ $sac->date ? date('d-M-Y', strtotime($sac->date)) : '-' }}</b></span><br> --}}

                <span>{{ $sac->checked_name }}</b></span><br>

                <span>{{ $sac->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
