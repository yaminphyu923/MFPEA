@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('fcar0500.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">F-CAR-05-00</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">Job Number</td>
                <td>: {{ $che->job_number != null ? $che->job_number : '' }}</td>
            </tr>

            <tr>
                <td>Analysis Report No</td>
                <td>: {{ $che->report_no != null ? $che->report_no : '-' }}</td>
            </tr>
            <tr>
                <td>Sample Name</td>
                <td>: {{ $che->sample_name != null ? $che->sample_name : '-' }}</td>
            </tr>
            <tr>
                <td>Date Received</td>
                <td>: {{ $che->received_date != null ? date('d-M-Y', strtotime($che->received_date)) : '-' }}
                </td>
            </tr>

            <tr>
                <td>Analysis Date</td>
                <td>: {{ $che->analysis_date != null ? date('d-M-Y', strtotime($che->analysis_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>Issue Date</td>
                <td>: {{ $che->issue_date != null ? date('d-M-Y', strtotime($che->issue_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>Result</td>
                <td>: {{ $che->result != null ? $che->result : '' }}

                </td>
            </tr>

        </table>
    </div>


    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th>Sr. No</th>
                <th>Test Parameter</th>
                <th>Test Method</th>
                <th>Result</th>
                <th>Unit</th>
                <th>Guideline Value</th>
            </tr>
        </thead>

        <tbody>
            <tr style="border-color: #F5F7FF;">
                <td>1</td>
                <td>{{ $che->bod_para }}</td>
                <td>{{ $che->bod_method }}</td>
                <td>{{ $che->bod_result }}</td>
                <td>{{ $che->bod_unit }}</td>
                <td>{{ $che->bod_value }}</td>
            </tr>

            <tr style="border-color: #F5F7FF;">
                <td>2</td>
                <td>{{ $che->cod_para }}</td>
                <td>{{ $che->cod_method }}</td>
                <td>{{ $che->cod_result }}</td>
                <td>{{ $che->cod_unit }}</td>
                <td>{{ $che->cod_value }}</td>
            </tr>
            <tr style="border-color: #F5F7FF;">
                <td>3</td>
                <td>{{ $che->oil_para }}</td>
                <td>{{ $che->oil_method }}</td>
                <td>{{ $che->oil_result }}</td>
                <td>{{ $che->oil_unit }}</td>
                <td>{{ $che->oil_value }}</td>
            </tr>
            <tr style="border-color: #F5F7FF;">
                <td>4</td>
                <td>{{ $che->ph_para }}</td>
                <td>{{ $che->ph_method }}</td>
                <td>{{ $che->ph_result }}</td>
                <td>{{ $che->ph_unit }}</td>
                <td>{{ $che->ph_value }}</td>
            </tr>
            <tr style="border-color: #F5F7FF;">
                <td>5</td>
                <td>{{ $che->nitrogen_para }}</td>
                <td>{{ $che->nitrogen_method }}</td>
                <td>{{ $che->nitrogen_result }}</td>
                <td>{{ $che->nitrogen_unit }}</td>
                <td>{{ $che->nitrogen_value }}</td>
            </tr>
            <tr style="border-color: #F5F7FF;">
                <td>6</td>
                <td>{{ $che->phos_para }}</td>
                <td>{{ $che->phos_method }}</td>
                <td>{{ $che->phos_result }}</td>
                <td>{{ $che->phos_unit }}</td>
                <td>{{ $che->phos_value }}</td>
            </tr>
            <tr>
                <td>7</td>
                <td>{{ $che->solid_para }}</td>
                <td>{{ $che->solid_method }}</td>
                <td>{{ $che->solid_result }}</td>
                <td>{{ $che->solid_unit }}</td>
                <td>{{ $che->solid_value }}</td>
            </tr>

        </tbody>
    </table>

    <h4>Remark: ND = Not Detected</h4>

    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4>Sign</h4>
            <h4>Name</h4>
            <h4>Position</h4>
            <h4>Check By</h4>
            <h4>Check By</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            : @if ($che->sign != null)
                <img src="{{ asset('photos/ww_fcar0500s/' . $che->sign) }}" alt="" style="width:100px;">
            @else
                <span>____</span>
            @endif

            <h4>: <b>{{ $che->name != null ? $che->name : '' }}</b></h4>
            <h4>: <b>{{ $che->position != null ? $che->position : '' }}</b></h4>
            <h4>: <b>{{ $che->check1 != null ? $che->check1 : '' }}</b></h4>
            <h4>: <b>{{ $che->check2 != null ? $che->check2 : '' }}</b></h4>

        </div>

    </div>
@endsection
