@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('car0500.index') }}">
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

    <div class="flex-container">
        <div class="analysis" style="flex-grow: 12">
            ANALYSIS RESULTS
        </div>
        <div class="gc-form" style="flex-grow: 1">F-Car-05-00</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
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
                <td>: {{ $car->received_date != null ? date('d-M-Y', strtotime($car->received_date)) : '-' }}</td>
            </tr>
            <tr>
                <td>5.Analysis Date</td>
                <td>: {{ $car->analysis_date != null ? date('d-M-Y', strtotime($car->analysis_date)) : '-' }}</td>
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


    <table class="gc-table table table-bordered">
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

    <div class="flex-box">
        <div>
            <h4>Remark</h4>
        </div>
        <div>
            <h4>: <b>ND = Not Detected</b></h4>
        </div>
    </div>


    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4>Name</h4>
            <h4>Position</h4>
            <h4>Signature</h4>
        </div>

        <div style="flex-grow: 2">


            <h4>: <b>{{ $car->name != null ? $car->name : '' }}</b></h4>
            <h4>: <b>{{ $car->position != null ? $car->position : '' }}</b></h4>
            : <img src="{{ asset('photos/hmm_car0500s/' . $car->sign) }}" alt="" style="width:100px;">
        </div>

        <div style="flex-grow: 2;">

            <h4>Check By</h4>
            <h4>Check By</h4>
        </div>

        <div style="flex-grow: 2;">

            <h4>: <b>{{ $car->checkby1 != null ? $car->checkby1 : '' }}</b></h4>
            <h4>: <b>{{ $car->checkby2 != null ? $car->checkby2 : '' }}</b></h4>
        </div>

    </div>
@endsection
