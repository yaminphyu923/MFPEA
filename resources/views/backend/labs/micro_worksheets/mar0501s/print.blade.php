@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('fmar0501.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                        <button type="button" class="btn btn-md btn-primary print"><i class="fas fa-print"></i>
                            <b>Print</b></button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="gc-head">Food Industries Development Supporting Laboratory- FIDSL</h3>

    <div class="flex-container" style="margin-bottom:10px;">
        <div style="flex-grow: 5">

        </div>
        <div class="analysis" style="flex-grow: 15">
            ANALYSIS RESULTS
        </div>
        <div class="gc-form" style="flex-grow: 1">F-MAR-05-01</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">Job Number</td>
                <td>: {{ $fmar0501->job_number != null ? $fmar0501->job_number : '' }}</td>
            </tr>
            <tr>
                <td>Analysis Report No</td>
                <td>: {{ $fmar0501->report_no != null ? $fmar0501->report_no : '-' }}</td>
            </tr>
            <tr>
                <td>Sample Name</td>
                <td>: {{ $fmar0501->sample_name != null ? $fmar0501->sample_name : '' }}</td>
            </tr>
            <tr>
                <td>Received Date</td>
                <td>: {{ $fmar0501->received_date != null ? date('d-M-Y', strtotime($fmar0501->received_date)) : '-' }}</td>
            </tr>

            <tr>
                <td>Analysis Date</td>
                <td>: {{ $fmar0501->analysis_date != null ? date('d-M-Y', strtotime($fmar0501->analysis_date)) : '' }}</td>
            </tr>

            <tr>
                <td>Issue Date</td>
                <td>: {{ $fmar0501->issue_date != null ? date('d-M-Y', strtotime($fmar0501->issue_date)) : '' }}</td>
            </tr>

            <tr>
                <td>Results</td>
                <td>: {{ $fmar0501->results != null ? $fmar0501->results : '' }}</td>
            </tr>
        </table>
    </div>


    <table class="gc-table table table-bordered">
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

    <div class="flex-box">
        <div>
            <h4>Refmar0501k</h4>
        </div>
        <div>
            <h4>: ND = Not Detected </b></h4>
        </div>
    </div>

    <div class="flex-box">
        <div>
            <h4>cfu</h4>
        </div>
        <div>
            <h4>= Colony Forming Unit</b></h4>
        </div>
    </div>


    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4 style="height: 44px;">Sign</h4>
            <h4>Name</h4>
            <h4>Position</h4>
        </div>

        <div style="flex-grow: 2;fmar0501gin-top:10px;">

            : @if ($fmar0501->sign != null)
                <img src="{{ asset('photos/mw_mar0501s/sign/' . $fmar0501->sign) }}" alt=""
                    style="width:100px;height:44px;">
            @else
                <span>____</span>
            @endif

            <h4>: <b>{{ $fmar0501->name != null ? $fmar0501->name : '' }}</b></h4>
            <h4>: <b>{{ $fmar0501->position != null ? $fmar0501->position : '' }}</b></h4>

        </div>

        <div style="flex-grow: 2">

            <h4 style="height: 44px;">Checked by</h4>
            <h4></h4>
            <h4>Checked by</h4>
        </div>

        <div style="flex-grow: 2;">

            <h4 style="height: 44px;">: <b>{{ $fmar0501->checkby1 != null ? $fmar0501->checkby1 : '' }}</b></h4>
            <h4></h4>
            <h4>: <b>{{ $fmar0501->checkby2 != null ? $fmar0501->checkby2 : '' }}</b></h4>

        </div>

    </div>
@endsection
