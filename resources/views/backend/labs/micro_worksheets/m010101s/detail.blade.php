@extends('backend.main')

@section('lab-active', 'active')

@section('m010101-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('m010101.index') }}">
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
                <h5 class="text-center"><b>WORKSHEET FOR AEROBIC PLATE COUNT</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>F-M01-01-01</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
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
                            <td>: {{ $m->incubation_hours != null ? $m->incubation_hours : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Sample homogenate </td>
                            <td>: ({{ $m->sample_homogenate != null ? $m->sample_homogenate : '____' }}) of sample +
                                ({{ $m->diluent_homogenate != null ? $m->diluent_homogenate : '____' }}) ml of diluent
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">Reference Method</td>
                        </tr>

                        <tr>
                            <td colspan="4">: {{ $m->reference_method != null ? $m->reference_method : '' }}</td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="3">AEROBIC PLATE COUNT</th>
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
            </div>

            {{-- <div class="col-sm-12 mt-3">
                <span>Remark: ND = Not Detected</span>
            </div>

            <div class="col-sm-12 mt-3">
                <span>cfu= Colony Forming Unit</span>
            </div> --}}
            <div class="col-sm-6 my-3">
                <span>Analyzed by : <b>{{ $m->analyzed_by }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $m->checked_by }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Position : <b>{{ $m->analyzed_position }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Position : <b>{{ $m->checked_position }}</b></span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($m->analyzed_sign != null)
                        <img src="{{ asset('photos/mw_m010101s/analyzed_sign/' . $m->analyzed_sign) }}" alt=""
                            style="width:100px;">

                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($m->analyzed_date)) }}</b></h5>
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($m->checked_sign != null)
                        <img src="{{ asset('photos/mw_m010101s/checked_sign/' . $m->checked_sign) }}" alt=""
                            style="width:100px;">
                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($m->checked_date)) }}</b></h5>
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
