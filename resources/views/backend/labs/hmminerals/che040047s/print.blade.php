@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('che040047.index') }}">
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
            WORK SHEET FOR DETERMINATION OF MERCURY (HG)
        </div>
        <div class="gc-form" style="flex-grow: 1">FIDSL-Che-04-01/47</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">Job Number</td>
                <td>: {{ $che->job_number != null ? $che->job_number : '' }}</td>
            </tr>
            <tr>
                <td>Sample Name</td>
                <td>: {{ $che->sample_name != null ? $che->sample_name : '' }}</td>
            </tr>
            <tr>
                <td>Received Date</td>
                <td>: {{ $che->received_date != null ? date('d-M-Y', strtotime($che->received_date)) : '-' }}</td>
            </tr>
            <tr>
                <td>Date Initiated for Analysis</td>
                <td>: {{ $che->initiated_date != null ? date('d-M-Y', strtotime($che->initiated_date)) : '-' }}</td>
            </tr>
            <tr>
                <td>Date Reported</td>
                <td>: {{ $che->reported_date != null ? date('d-M-Y', strtotime($che->reported_date)) : '' }}</td>
            </tr>
            <tr>
                <td>Method</td>
                <td>:{{ $che->method_id }}</td>
                {{-- @foreach ($methods as $method)
                        @if ($method->id == $che->method)
                            {{ $method->name }}
                        @endif
                    @endforeach --}}
                </td>
            </tr>
        </table>
    </div>


    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th>Data</th>
                <th>1<sup>st</sup> Test</th>
                <th>2<sup>nd</sup> Test</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $che->weight }}</td>
                <td>{{ $che->weight_1 }}</td>
                <td>{{ $che->weight_2 }}</td>
            </tr>

            <tr style="border:1px solid #F5F7FF;">
                <td>{{ $che->nitric_volume }}</td>
                <td>{{ $che->nitric_volume_1 }}</td>
                <td>{{ $che->nitric_volume_2 }}</td>
            </tr>

            <tr style="border:1px solid #F5F7FF;">
                <td>{{ $che->hydrogen_volume }}</td>
                <td>{{ $che->hydrogen_volume_1 }}</td>
                <td>{{ $che->hydrogen_volume_2 }}</td>
            </tr>

            <tr style="border:1px solid #F5F7FF;">
                <td>
                    <h4>After Digestion;</h4>
                    {{ $che->volume }}
                </td>
                <td>{{ $che->volume_1 }}</td>
                <td>{{ $che->volume_2 }}</td>
            </tr>

            <tr style="border:1px solid #F5F7FF;">
                <td>{{ $che->df }}</td>
                <td>{{ $che->df_1 }}</td>
                <td>{{ $che->df_2 }}</td>
            </tr>

            <tr style="border:1px solid #F5F7FF;">
                <td>{{ $che->sd }}</td>
                <td>{{ $che->sd_1 }}</td>
                <td>{{ $che->sd_2 }}</td>
            </tr>

            <tr style="border:1px solid #F5F7FF;">
                <td>{{ $che->concentration }}</td>
                <td>{{ $che->concentration_1 }}</td>
                <td>{{ $che->concentration_2 }}</td>
            </tr>

            <tr>
                <td>{{ $che->reagent }}</td>
                <td>{{ $che->reagent_1 }}</td>
                <td>{{ $che->reagent_2 }}</td>
            </tr>

            <tr>
                <td>
                    <h4>Calculation</h4>
                    {{ $che->real_concentration }}
                </td>
                <td>{{ $che->real_concentration_1 }}</td>
                <td>{{ $che->real_concentration_2 }}</td>
            </tr>

            <tr>
                <td>{{ $che->hg }}</td>
                <td>{{ $che->hg_1 }}</td>
                <td>{{ $che->hg_2 }}</td>
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

            <h4 style="height: 50px;">Analysed by Sign</h4>
            <h4>Date</h4>
            <h4>Name</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            : @if ($che->analysed_sign != null)
                <img src="{{ asset('photos/hmm_che040047s/analysed_sign/' . $che->analysed_sign) }}" alt=""
                    style="width:100px;height:50px;">
            @else
                <span>____</span>
            @endif

            <h4>: <b>{{ $che->analysed_date != null ? date('d-M-Y', strtotime($che->analysed_date)) : '' }}</b></h4>
            <h4>: <b>{{ $che->analysed_name != null ? $che->analysed_name : '' }}</b></h4>

        </div>

        <div style="flex-grow: 2">

            <h4 style="height: 50px;">Checked by Sign</h4>
            <h4>Date</h4>
            <h4>Name</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            : @if ($che->checked_sign != null)
                <img src="{{ asset('photos/hmm_che040047s/checked_sign/' . $che->checked_sign) }}" alt=""
                    style="width:100px;height:50px;">
            @else
                <span>____</span>
            @endif

            <h4>: <b>{{ $che->checked_date != null ? date('d-M-Y', strtotime($che->checked_date)) : '' }}</b></h4>
            <h4>: <b>{{ $che->checked_name != null ? $che->checked_name : '' }}</b></h4>

        </div>

    </div>
@endsection
