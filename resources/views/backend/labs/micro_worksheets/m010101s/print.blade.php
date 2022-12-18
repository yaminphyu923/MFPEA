@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('m010101.index') }}">
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
            WORKSHEET FOR AEROBIC PLATE COUNT
        </div>
        <div class="gc-form" style="flex-grow: 1">F-M01-01-01</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td>Job Number</td>
                <td>: {{ $m->job_number != null ? $m->job_number : '' }}</td>

                <td>Analysis·date</td>
                <td>: {{ $m->analysis_date != null ? date('d-M-Y', strtotime($m->analysis_date)) : '' }}</td>
            </tr>

            <tr>
                <td>Sample Description</td>
                <td>: {{ $m->description != null ? $m->description : '' }}</td>

                <td>Report date</td>
                <td>: {{ $m->report_date != null ? date('d-M-Y', strtotime($m->report_date)) : '' }}</td>
            </tr>

            <tr>
                <td>Received Date</td>
                <td>: {{ $m->received_date != null ? date('d-M-Y', strtotime($m->received_date)) : '' }}</td>

                <td>Incubation hours</td>
                <td>: {{ $m->incubation_hours != null ? $m->incubation_hours : '' }}</td>
            </tr>

            <tr>
                <td>Reference Method</td>
                <td colspan="3">: {{ $m->reference_method != null ? $m->reference_method : '' }}</td>
            </tr>

            <tr>
                <td>Sample homogenate </td>
                <td colspan="3">: ({{ $m->sample_homogenate != null ? $m->sample_homogenate : '____' }}) of sample +
                    ({{ $m->diluent_homogenate != null ? $m->diluent_homogenate : '____' }}) ml of diluent
                </td>
            </tr>
        </table>
    </div>


    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th colspan="3" style="text-align: center;">AEROBIC PLATE COUNT</th>
            </tr>
            <tr>
                <th>Dilution</th>
                <th>Plate 1</th>
                <th>Plate 2</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($m_counts as $m_count)
                <tr>
                    <td>{{ $m_count->dilution }}</td>
                    <td>{{ $m_count->plate1 }}</td>
                    <td>{{ $m_count->plate2 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th>Calculation</th>
                <th>Result</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $m->calculation }}</td>
                <td>{{ $m->result }} cfu/g / cfu/ml</td>
            </tr>
        </tbody>
    </table>

    {{-- <div class="flex-box">
        <div>
            <h4>Remark</h4>
        </div>
        <div>
            <h4>: NO= Not Detected</b></h4>
        </div>
    </div>

    <div class="flex-box">
        <div>
            <h4>cfu</h4>
        </div>
        <div>
            <h4>= Colony Forming Unit</b></h4>
        </div>
    </div> --}}


    <div class="flex-container">
        <div style="flex-grow: 2">

            <h4>Analyzed by </h4>
            <h4>Position</h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            <h4>: <b>{{ $m->analyzed_by != null ? $m->analyzed_by : '' }}</b></h4>
            <h4>: <b>{{ $m->analyzed_position != null ? $m->analyzed_position : '' }}</b></h4>

            : @if ($m->analyzed_sign != null)
                <img src="{{ asset('photos/mw_m010101s/analyzed_sign/' . $m->analyzed_sign) }}" alt=""
                    style="width:100px;height:44px;">
                <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($m->analyzed_date)) }}</b></h5>
            @else
                <span>____</span>
            @endif
        </div>

        <div style="flex-grow: 2">

            <h4>Checked by </h4>
            <h4>Position</h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            <h4>: <b>{{ $m->checked_by != null ? $m->checked_by : '' }}</b></h4>
            <h4>: <b>{{ $m->checked_position != null ? $m->checked_position : '' }}</b></h4>

            : @if ($m->checked_sign != null)
                <img src="{{ asset('photos/mw_m010101s/checked_sign/' . $m->checked_sign) }}" alt=""
                    style="width:100px;height:44px;">
                <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($m->checked_date)) }}</b></h5>
            @else
                <span>____</span>
            @endif
        </div>
    </div>
@endsection
