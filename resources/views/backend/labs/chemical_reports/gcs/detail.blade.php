@extends('backend.main')

@section('lab-active', 'active')

@section('gc-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="gcd mb-3 gcd-button">
                    <div class="gcd-header d-flex justify-content-end">
                        <a href="{{ route('gcs.index') }}">
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
                <p class="border text-center p-2"><b>{{ $gc->title }}</b></p>
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
                    <li>: {{ $gc->company_name != null ? $gc->company_name : '-' }}</li>
                    <li>: {{ $gc->address != null ? $gc->address : '-' }}</li>
                    <li>: {{ $gc->phone != null ? $gc->phone : '-' }}</li>
                    <li>:
                        {{ $gc->lab_received_date != null ? date('d-M-Y', strtotime($gc->lab_received_date)) : '-' }}
                    </li>
                    <li>: {{ $gc->sample_number != null ? $gc->sample_number : '-' }}</li>
                    <li>: {{ $gc->product_name != null ? $gc->product_name : '-' }}</li>
                    <li>:
                        {{ $gc->test_performed_date != null ? date('d-M-Y', strtotime($gc->test_performed_date)) : '-' }}
                    </li>
                    <li>: {{ $gc->test_type != null ? $gc->test_type : '-' }}</li>
                    <li>: {{ $gc->issue_date != null ? date('d-M-Y', strtotime($gc->issue_date)) : '-' }}
                    </li>
                    <li>: {{ $gc->results != null ? $gc->results : '-' }}</li>
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
                            <td>1.</td>
                            <td>{{ $gc->lauric_12_0_para }}</td>
                            <td rowspan="17" class="text-center">{{ $gc->lauric_12_0_method }}</td>
                            <td>{{ $gc->lauric_12_0_result }}</td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>{{ $gc->myristic_14_0_para }}</td>
                            <td>{{ $gc->myristic_14_0_result }}</td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>{{ $gc->myristoleic_14_1_para }}</td>
                            <td>{{ $gc->myristoleic_14_1_result }}</td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>{{ $gc->palmitic_16_0_para }}</td>
                            <td>{{ $gc->palmitic_16_0_result }}</td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>{{ $gc->palmitoleic_16_1_para }}</td>
                            <td>{{ $gc->palmitoleic_16_1_result }}</td>
                        </tr>

                        <tr>
                            <td>6.</td>
                            <td>{{ $gc->stearic_18_0_para }}</td>
                            <td>{{ $gc->stearic_18_0_result }}</td>
                        </tr>

                        <tr>
                            <td>7.</td>
                            <td>{{ $gc->oleictrans_18_1_para }}</td>
                            <td>{{ $gc->oleictrans_18_1_result }}</td>
                        </tr>

                        <tr>
                            <td>8.</td>
                            <td>{{ $gc->oleic_18_1_para }}</td>
                            <td>{{ $gc->oleic_18_1_result }}</td>
                        </tr>

                        <tr>
                            <td>9.</td>
                            <td>{{ $gc->linoleictrans_18_2_para }}</td>
                            <td>{{ $gc->linoleictrans_18_2_result }}</td>
                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>{{ $gc->linoleic_18_2_para }}</td>
                            <td>{{ $gc->linoleic_18_2_result }}</td>
                        </tr>

                        <tr>
                            <td>11.</td>
                            <td>{{ $gc->linoleic_18_3_para }}</td>
                            <td>{{ $gc->linoleic_18_3_result }}</td>
                        </tr>

                        <tr>
                            <td>12.</td>
                            <td>{{ $gc->arachidic_20_0_para }}</td>
                            <td>{{ $gc->arachidic_20_0_result }}</td>
                        </tr>

                        <tr>
                            <td>13.</td>
                            <td>{{ $gc->paullinic_20_1_para }}</td>
                            <td>{{ $gc->paullinic_20_1_result }}</td>
                        </tr>

                        <tr>
                            <td>14.</td>
                            <td>{{ $gc->arachidonic_20_4_para }}</td>
                            <td>{{ $gc->arachidonic_20_4_result }}</td>
                        </tr>

                        <tr>
                            <td>15.</td>
                            <td>{{ $gc->bchenic_22_0_para }}</td>
                            <td>{{ $gc->bchenic_22_0_result }}</td>
                        </tr>

                        <tr>
                            <td>16.</td>
                            <td>{{ $gc->erucic_22_1_para }}</td>
                            <td>{{ $gc->erucic_22_1_result }}</td>
                        </tr>

                        <tr>
                            <td>17.</td>
                            <td>{{ $gc->lignoceric_24_0_para }}</td>
                            <td>{{ $gc->lignoceric_24_0_result }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>



        </div>

        <div class="row">
            <div class="col-sm-6">

                <span>Method : {{ $gc->method }}</span>

                {{-- <div class="gcd w-50 text-center">
                    <div class="gcd-header">
                        <p>gc Facts</p>
                        <p>1 package (100g)</p>
                    </div>
                    <div class="gcd-body">
                        <p>Energy - {{ $gc->energy_result }} kcal</p>
                        <p>Protein - {{ $gc->protein_result }} g</p>
                        <p>Fat - {{ $gc->fat_result }} g</p>
                        <p>gcbohydrate - {{ $gc->gcbo_result }} g</p>
                        <p>Sodium (Na) - {{ $gc->sodium_result }} g</p>
                    </div>
                </div> --}}

            </div>

            <div class="col-sm-6 my-3 text-center">
                <span><img src="{{ asset('photos/cr_gcs/' . $gc->sign) }}" alt="" style="width:100px;"></span><br>
                <span>{{ $gc->date ? date('d-M-Y', strtotime($gc->date)) : '-' }}</b></span><br>

                <span>{{ $gc->checked_name }}</b></span><br>

                <span>{{ $gc->position }}</b></span>
            </div>

        </div>
    </div>


@endsection

@section('script')

@endsection
