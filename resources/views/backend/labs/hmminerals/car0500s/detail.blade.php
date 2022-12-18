@extends('backend.main')

@section('lab-active', 'active')

@section('car0500-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('car0500.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-hand-point-left"></i>
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
                <p class="border text-center p-2"><b>F-Car-05-00</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">1.Job Number</td>
                            <td>: {{ $car->job_number != null ? $car->job_number : '' }}</td>
                        </tr>
                        <tr>
                            <td>2.Analysis Report No.</td>
                            <td>: {{ $car->report_number != null ? $car->report_number : '' }}</td>
                        </tr>
                        <tr>
                            <td>3.Sample Name</td>
                            <td>: {{ $car->sample_name != null ? $car->sample_name : '' }}</td>
                        </tr>
                        <tr>
                            <td>4.Received Date</td>
                            <td>: {{ $car->received_date != null ? date('d-M-Y', strtotime($car->received_date)) : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>5.Analysis Date</td>
                            <td>: {{ $car->analysis_date != null ? date('d-M-Y', strtotime($car->analysis_date)) : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>6.Issue Date</td>
                            <td>: {{ $car->issue_date != null ? date('d-M-Y', strtotime($car->issue_date)) : '' }}</td>
                        </tr>
                        <tr>
                            <td>7.Result</td>
                            <td>: {{ $car->result != null ? $car->result : '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

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
                            <td>{{ $car->as_para }}</td>
                            <td>{{ $car->as_method }}</td>
                            <td>{{ $car->as_result }}</td>
                            <td>{{ $car->as_unit }}</td>
                            <td>{{ $car->as_limit }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $car->ca_para }}</td>
                            <td>{{ $car->ca_method }}</td>
                            <td>{{ $car->ca_result }}</td>
                            <td>{{ $car->ca_unit }}</td>
                            <td>{{ $car->ca_limit }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $car->cd_para }}</td>
                            <td>{{ $car->cd_method }}</td>
                            <td>{{ $car->cd_result }}</td>
                            <td>{{ $car->cd_unit }}</td>
                            <td>{{ $car->cd_limit }}</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>{{ $car->cr_para }}</td>
                            <td>{{ $car->cr_method }}</td>
                            <td>{{ $car->cr_result }}</td>
                            <td>{{ $car->cr_unit }}</td>
                            <td>{{ $car->cr_limit }}</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>{{ $car->cu_para }}</td>
                            <td>{{ $car->cu_method }}</td>
                            <td>{{ $car->cu_result }}</td>
                            <td>{{ $car->cu_unit }}</td>
                            <td>{{ $car->cu_limit }}</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>{{ $car->fe_para }}</td>
                            <td>{{ $car->fe_method }}</td>
                            <td>{{ $car->fe_result }}</td>
                            <td>{{ $car->fe_unit }}</td>
                            <td>{{ $car->fe_limit }}</td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>{{ $car->pb_para }}</td>
                            <td>{{ $car->pb_method }}</td>
                            <td>{{ $car->pb_result }}</td>
                            <td>{{ $car->pb_unit }}</td>
                            <td>{{ $car->pb_limit }}</td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>{{ $car->mg_para }}</td>
                            <td>{{ $car->mg_method }}</td>
                            <td>{{ $car->mg_result }}</td>
                            <td>{{ $car->mg_unit }}</td>
                            <td>{{ $car->mg_limit }}</td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>{{ $car->hg_para }}</td>
                            <td>{{ $car->hg_method }}</td>
                            <td>{{ $car->hg_result }}</td>
                            <td>{{ $car->hg_unit }}</td>
                            <td>{{ $car->hg_limit }}</td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td>{{ $car->k_para }}</td>
                            <td>{{ $car->k_method }}</td>
                            <td>{{ $car->k_result }}</td>
                            <td>{{ $car->k_unit }}</td>
                            <td>{{ $car->k_limit }}</td>
                        </tr>

                        <tr>
                            <td>11</td>
                            <td>{{ $car->se_para }}</td>
                            <td>{{ $car->se_method }}</td>
                            <td>{{ $car->se_result }}</td>
                            <td>{{ $car->se_unit }}</td>
                            <td>{{ $car->se_limit }}</td>
                        </tr>

                        <tr>
                            <td>12</td>
                            <td>{{ $car->na_para }}</td>
                            <td>{{ $car->na_method }}</td>
                            <td>{{ $car->na_result }}</td>
                            <td>{{ $car->na_unit }}</td>
                            <td>{{ $car->na_limit }}</td>
                        </tr>

                        <tr>
                            <td>13</td>
                            <td>{{ $car->zn_para }}</td>
                            <td>{{ $car->zn_method }}</td>
                            <td>{{ $car->zn_result }}</td>
                            <td>{{ $car->zn_unit }}</td>
                            <td>{{ $car->zn_limit }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                {{-- @if ($car->remark)
                    <span>Remark : {{ $car->remark }}</span>
                @else --}}
                <span>Remark: ND = Not Detected</span>
                {{-- @endif --}}
            </div>

            <div class="col-sm-6 my-3">
                <span>Sign: <img src="{{ asset('photos/hmm_car0500s/' . $car->sign) }}" alt=""
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
