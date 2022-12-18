@extends('backend.main')

@section('lab-active', 'active')

@section('car0501-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('car0501.index') }}">
                            <button type="button" class="btn btn-md btn-primary btn-theme mr-1"><i
                                    class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 my-3">
                <h4 class="text-center"><b>Food Industries Development Supporting Laboratory- FIDSL</b></h4>
            </div>

            <div class="col-sm-10">
                <h5 class="text-center"><b>ANALYSIS RESULTS</b></h5>
            </div>

            <div class="col-sm-2">
                <p class="border text-center p-2"><b>F-Car-05-01</b></p>
            </div>


            <div class="col-sm-3">
                <ol>
                    <li>Job Number</li>
                    <li>Analysis Report No.</li>
                    <li>Sample Name</li>
                    <li>Received Date</li>
                    <li>Analysis Date</li>
                    <li>Issue Date</li>
                    <li>Result</li>
                </ol>
            </div>

            <div class="col-sm-9">
                <ul class="list-unstyled">
                    <li>: {{ $car->job_number != null ? $car->job_number : '-' }}</li>
                    <li>: {{ $car->report_number != null ? $car->report_number : '-' }}</li>
                    <li>: {{ $car->sample_name != null ? $car->sample_name : '-' }}</li>
                    <li>: {{ $car->received_date != null ? date('d-M-Y', strtotime($car->received_date)) : '-' }}</li>
                    <li>: {{ $car->analysis_date != null ? date('d-M-Y', strtotime($car->analysis_date)) : '-' }}</li>
                    <li>: {{ $car->issue_date != null ? date('d-M-Y', strtotime($car->issue_date)) : '-' }}</li>
                    <li>: {{ $car->result != null ? $car->result : '-' }}</li>
                </ul>

            </div>

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
                            <td>{{ $car->lauric_12_0_para }}</td>
                            <td rowspan="15" class="text-center">{{ $car->lauric_12_0_method }}</td>
                            <td>{{ $car->lauric_12_0_result }}</td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>{{ $car->myristic_14_0_para }}</td>
                            <td>{{ $car->myristic_14_0_result }}</td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>{{ $car->myristoleic_14_1_para }}</td>
                            <td>{{ $car->myristoleic_14_1_result }}</td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>{{ $car->palmitic_16_0_para }}</td>
                            <td>{{ $car->palmitic_16_0_result }}</td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>{{ $car->palmitoleic_16_1_para }}</td>
                            <td>{{ $car->palmitoleic_16_1_result }}</td>
                        </tr>

                        <tr>
                            <td>6.</td>
                            <td>{{ $car->stearic_18_0_para }}</td>
                            <td>{{ $car->stearic_18_0_result }}</td>
                        </tr>

                        <tr>
                            <td>7.</td>
                            <td>{{ $car->oleic_18_1_para }}</td>
                            <td>{{ $car->oleic_18_1_result }}</td>
                        </tr>

                        <tr>
                            <td>8.</td>
                            <td>{{ $car->linoleic_18_2_para }}</td>
                            <td>{{ $car->linoleic_18_2_result }}</td>
                        </tr>

                        <tr>
                            <td>9.</td>
                            <td>{{ $car->linoleic_18_3_para }}</td>
                            <td>{{ $car->linoleic_18_3_result }}</td>
                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>{{ $car->arachidic_20_0_para }}</td>
                            <td>{{ $car->arachidic_20_0_result }}</td>
                        </tr>

                        <tr>
                            <td>11.</td>
                            <td>{{ $car->paullinic_20_1_para }}</td>
                            <td>{{ $car->paullinic_20_1_result }}</td>
                        </tr>

                        <tr>
                            <td>12.</td>
                            <td>{{ $car->arachidonic_20_4_para }}</td>
                            <td>{{ $car->arachidonic_20_4_result }}</td>
                        </tr>

                        <tr>
                            <td>13.</td>
                            <td>{{ $car->bchenic_22_0_para }}</td>
                            <td>{{ $car->bchenic_22_0_result }}</td>
                        </tr>

                        <tr>
                            <td>14.</td>
                            <td>{{ $car->erucic_22_1_para }}</td>
                            <td>{{ $car->erucic_22_1_result }}</td>
                        </tr>

                        <tr>
                            <td>15.</td>
                            <td>{{ $car->lignoceric_24_0_para }}</td>
                            <td>{{ $car->lignoceric_24_0_result }}</td>
                        </tr>
                        {{-- @foreach ($car_test_fills as $car_test_fill)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $car_test_fill->test_parameter }}</td>
                                <td>{{ $car_test_fill->test_method }}</td>
                                <td>{{ $car_test_fill->test_result }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                @if ($car->remark)
                    <span>Remark : {{ $car->remark }}</span>
                @else
                    <span>Remark: ND = Not Detected</span>
                @endif
            </div>

            <div class="col-sm-6 my-3">
                <span>Sign: <img src="{{ asset('photos/gc_car0501s/' . $car->sign) }}" alt=""
                        style="width:100px;"></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Checked by: <b>{{ $car->checkby1 }}</b></span>
            </div>

            <div class="col-sm-12">
                <span>Name: <b>{{ $car->name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Position: <b>{{ $car->position }}</b></span>
            </div>
            <div class="col-sm-6 my-3">
                <span>Checked by: <b>{{ $car->checkby2 }}</b></span>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
