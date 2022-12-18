@extends('backend.main')

@section('lab-active', 'active')

@section('fmar0501-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fmar0501.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 my-3">
                <h4 class="text-center"><b>Food Industries Development Supporting Laboratory- FIDSL</b></h4>
            </div>

            <div class="col-sm-12">
                <h5 class="text-center"><b>ANALYSIS RESULTS</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>F-Mar-05-01</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $fmar0501->job_number != null ? $fmar0501->job_number : '' }}</td>
                        </tr>
                        <tr>
                            <td>Analysis Report No.</td>
                            <td>: {{ $fmar0501->report_no != null ? $fmar0501->report_no : '-' }}</td>
                        </tr>
                        <tr>
                            <td>Sample Name</td>
                            <td>: {{ $fmar0501->sample_name != null ? $fmar0501->sample_name : '' }}</td>
                        </tr>
                        <tr>
                            <td>Date Received</td>
                            <td>:
                                {{ $fmar0501->received_date != null ? date('d-M-Y', strtotime($fmar0501->received_date)) : '-' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Analysis Date</td>
                            <td>:
                                {{ $fmar0501->analysis_date != null ? date('d-M-Y', strtotime($fmar0501->analysis_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Issue Date</td>
                            <td>: {{ $fmar0501->issue_date != null ? date('d-M-Y', strtotime($fmar0501->issue_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Results</td>
                            <td>: {{ $fmar0501->results != null ? $fmar0501->results : '' }}</td>
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
                            <th>Reference Method</th>
                            <th>Result</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{ $fmar0501->apc_test }}</td>
                            <td>{{ $fmar0501->apc_method }}</td>
                            <td>{{ $fmar0501->apc_result }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $fmar0501->coliform_test }}</td>
                            <td>{{ $fmar0501->coliform_method }}</td>
                            <td>{{ $fmar0501->coliform_result }}</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>{{ $fmar0501->ecoli_test }}</td>
                            <td>{{ $fmar0501->ecoli_method }}</td>
                            <td>{{ $fmar0501->ecoli_result }}</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>{{ $fmar0501->sta_test }}</td>
                            <td>{{ $fmar0501->sta_method }}</td>
                            <td>{{ $fmar0501->sta_result }}</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>{{ $fmar0501->sal_test }}</td>
                            <td>{{ $fmar0501->sal_method }}</td>
                            <td>{{ $fmar0501->sal_result }}</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>{{ $fmar0501->yeast_test }}</td>
                            <td>{{ $fmar0501->yeast_method }}</td>
                            <td>{{ $fmar0501->yeast_result }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                <span>Remark: ND = Not Detected</span>
            </div>

            <div class="col-sm-12 mt-3">
                <span>cfu= Colony Forming Unit</span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign:
                    @if ($fmar0501->sign != null)
                        <img src="{{ asset('photos/mw_mar0501s/sign/' . $fmar0501->sign) }}" alt=""
                            style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $fmar0501->checkby1 }}</b></span>
            </div>

            <div class="col-sm-12 my-3">
                <span>Name: <b>{{ $fmar0501->name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Position: <b>{{ $fmar0501->position }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by :
                    <b>{{ $fmar0501->checkby2 }}</b></span>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
