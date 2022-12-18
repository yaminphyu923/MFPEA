@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('fche040028.index') }}">
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
            WORKSHEET FOR DETERMINATION OF EXTRACTIVE
        </div>
        <div class="gc-form" style="flex-grow: 1">FIDSL-Che-04-00/28</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td>Job Number</td>
                <td>: {{ $fche040028->job_number != null ? $fche040028->job_number : '' }}</td>
            </tr>
            <tr>
                <td>Sample Name</td>
                <td>: {{ $fche040028->sample_name != null ? $fche040028->sample_name : '' }}</td>
            </tr>
            <tr>
                <td>Date Received</td>
                <td>: {{ $fche040028->received_date != null ? date('d-M-Y', strtotime($fche040028->received_date)) : '' }}
                </td>
            </tr>
            <tr>
                <td>Date Initiated for Analysis</td>
                <td>: {{ $fche040028->analysed_date != null ? date('d-M-Y', strtotime($fche040028->analysed_date)) : '' }}
                </td>
            </tr>
            <tr>
                <td>Date Reported</td>
                <td>: {{ $fche040028->reported_date != null ? date('d-M-Y', strtotime($fche040028->reported_date)) : '' }}
                </td>
            </tr>
            <tr>
                <td>Method</td>
                <td>: {{ $fche040028->method != null ? $fche040028->method : '' }}</td>
            </tr>

        </table>
    </div>


    <table class="gc-table table table-bordered">
        <tbody>
            <tr>
                <td>Data</td>
                <td>1st Test</td>
                <td>2nd Test</td>
            </tr>
            <tr style="border-color: #F5F7FF;">
                <td>{{ $fche040028->sample }}</td>
                <td>{{ $fche040028->sample_test1 }}</td>
                <td>{{ $fche040028->sample_test2 }}</td>
            </tr>

            <tr style="border-color: #F5F7FF;">
                <td>{{ $fche040028->water }}</td>
                <td>{{ $fche040028->water_test1 }}</td>
                <td>{{ $fche040028->water_test2 }}</td>
            </tr>

            <tr style="border-color: #F5F7FF;">
                <td>{{ $fche040028->first_boiling }}</td>
                <td>{{ $fche040028->first_boiling_test1 }}</td>
                <td>{{ $fche040028->first_boiling_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $fche040028->second_boiling }}</td>
                <td>{{ $fche040028->second_boiling_test1 }}</td>
                <td>{{ $fche040028->second_boiling_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $fche040028->makeup }}</td>
                <td>{{ $fche040028->makeup_test1 }}</td>
                <td>{{ $fche040028->makeup_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $fche040028->taken }}</td>
                <td>{{ $fche040028->taken_test1 }}</td>
                <td>{{ $fche040028->taken_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $fche040028->residue }}</td>
                <td>{{ $fche040028->residue_test1 }}</td>
                <td>{{ $fche040028->residue_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $fche040028->filtrated }}</td>
                <td>{{ $fche040028->filtrated_test1 }}</td>
                <td>{{ $fche040028->filtrated_test2 }}</td>
            </tr>

            <tr>
                <td colspan="3"><b>Calculation</b></td>
            </tr>

            <tr>
                <td>{{ $fche040028->extractive_cal }}</td>
                <td>{{ $fche040028->extractive_cal_test1 }}</td>
                <td>{{ $fche040028->extractive_cal_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $fche040028->result }}</td>
                <td>{{ $fche040028->result_test1 }}</td>
                <td>{{ $fche040028->result_test2 }}</td>
            </tr>

            <tr>
                <td>{{ $fche040028->extractive }}</td>
                <td>{{ $fche040028->extractive_test1 }}</td>
                <td>{{ $fche040028->extractive_test2 }}</td>
            </tr>
        </tbody>
    </table>

    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4>Analysed by </h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;">

            <h4>: <b>{{ $fche040028->analysed_name != null ? $fche040028->analysed_name : '' }}</b></h4>

            : @if ($fche040028->analysed_sign != null)
                <img src="{{ asset('photos/other_fche040028s/analysed_sign/' . $fche040028->analysed_sign) }}"
                    alt="" style="width:100px;height:44px;">
                <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($fche040028->analysed_date)) }}</b></h5>
            @else
                <span>____</span>
            @endif
        </div>

        <div style="flex-grow: 2">

            <h4>Checked by </h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;">

            <h4>: <b>{{ $fche040028->checked_name != null ? $fche040028->checked_name : '' }}</b></h4>

            : @if ($fche040028->checked_sign != null)
                <img src="{{ asset('photos/other_fche040028s/checked_sign/' . $fche040028->checked_sign) }}" alt=""
                    style="width:100px;height:44px;">
                <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($fche040028->checked_date)) }}</b></h5>
            @else
                <span>____</span>
            @endif
        </div>
    </div>
@endsection
