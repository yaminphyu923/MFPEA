@extends('backend.main')

@section('lab-active', 'active')

@section('export-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('exports.index') }}">
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
                <p class="border text-center p-2"><b>{{ $export->title }}</b></p>
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
                    <li>Quantity</li>
                    <li>Packing</li>
                    <li>Port of Loading</li>
                    <li>Port of Discharge</li>
                    <li>Vessle Name</li>
                    <li>PO Number</li>
                    <li>EORI Number</li>
                    <li>REX No.</li>
                    <li>HS Code</li>
                    <li>Test Type</li>
                    <li>Issue Date</li>
                    <li>Results</li>
                </ol>
            </div>

            <div class="col-sm-9">
                <ul class="list-unstyled">
                    <li>: {{ $export->company_name != null ? $export->company_name : '-' }}</li>
                    <li>: {{ $export->address != null ? $export->address : '-' }}</li>
                    <li>: {{ $export->phone != null ? $export->phone : '-' }}</li>
                    <li>:
                        {{ $export->lab_received_date != null ? date('d-M-Y', strtotime($export->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $export->sample_number != null ? $export->sample_number : '-' }}</li>
                    <li>: {{ $export->product_name != null ? $export->product_name : '-' }}</li>
                    <li>:
                        {{ $export->test_performed_date != null ? date('d-M-Y', strtotime($export->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $export->quantity != null ? $export->quantity : '-' }}</li>
                    <li>: {{ $export->packing != null ? $export->packing : '-' }}</li>
                    <li>: {{ $export->loading != null ? $export->loading : '-' }}</li>
                    <li>: {{ $export->discharge != null ? $export->discharge : '-' }}</li>
                    <li>: {{ $export->vessle_name != null ? $export->vessle_name : '-' }}</li>
                    <li>: {{ $export->po_number != null ? $export->po_number : '-' }}</li>
                    <li>: {{ $export->eori_number != null ? $export->eori_number : '-' }}</li>
                    <li>: {{ $export->rex_no != null ? $export->rex_no : '-' }}</li>
                    <li>: {{ $export->hs_code != null ? $export->hs_code : '-' }}</li>
                    <li>: {{ $export->test_type != null ? $export->test_type : '-' }}</li>
                    <li>: {{ $export->issue_date != null ? date('d-M-Y', strtotime($export->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $export->results != null ? $export->results : '-' }}</li>
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
                            <td>{{ $export->apc_para }}</td>
                            <td>{{ $export->apc_method }}</td>
                            <td>{{ $export->apc_result }}</td>
                            <td>{{ $export->apc_before }}</td>
                            <td>{{ $export->apc_after }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $export->coliform_para }}</td>
                            <td>{{ $export->coliform_method }}</td>
                            <td>{{ $export->coliform_result }}</td>
                            <td>{{ $export->coliform_before }}</td>
                            <td>{{ $export->coliform_after }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $export->coli_para }}</td>
                            <td>{{ $export->coli_method }}</td>
                            <td>{{ $export->coli_result }}</td>
                            <td>{{ $export->coli_before }}</td>
                            <td>{{ $export->coli_after }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $export->staphy_para }}</td>
                            <td>{{ $export->staphy_method }}</td>
                            <td>{{ $export->staphy_result }}</td>
                            <td>{{ $export->staphy_before }}</td>
                            <td>{{ $export->staphy_after }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $export->salmo_para }}</td>
                            <td>{{ $export->salmo_method }}</td>
                            <td>{{ $export->salmo_result }}</td>
                            <td>{{ $export->salmo_before }}</td>
                            <td>{{ $export->salmo_after }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $export->yeast_mould_para }}</td>
                            <td>{{ $export->yeast_mould_method }}</td>
                            <td>{{ $export->yeast_mould_result }}</td>
                            <td>{{ $export->yeast_mould_before }}</td>
                            <td>{{ $export->yeast_mould_after }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $export->method }}</span>

                {{-- <div class="card w-50 text-center">
                    <div class="card-header">
                        <p>export Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="card-body">
                        <p>Energy - {{ $export->energy_result }} kcal</p>
                        <p>Protein - {{ $export->protein_result }} g</p>
                        <p>Fat - {{ $export->fat_result }} g</p>
                        <p>Carbohydrate - {{ $export->carbo_result }} g</p>
                        <p>Sodium (Na) - {{ $export->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/mr_exports/' . $export->sign) }}" alt=""
                        style="width:100px;"></span><br>
                <span>{{ $export->date ? date('d-M-Y', strtotime($export->date)) : '-' }}</b></span><br>

                <span>{{ $export->checked_name }}</b></span><br>

                <span>{{ $export->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
