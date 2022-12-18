@extends('backend.main')

@section('lab-active', 'active')

@section('fche040039-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche040039.index') }}">
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
                <h5 class="text-center"><b>WORK SHEET FOR DETERMINATION OF AVAILABLE CHLORINE</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>FIDSL-Che-04-00/39</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $che->job_number != null ? $che->job_number : '' }}</td>
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
                            <td>Date Initiated for Analysis</td>
                            <td>: {{ $che->initiated_date != null ? date('d-M-Y', strtotime($che->initiated_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Reported Date</td>
                            <td>: {{ $che->reported_date != null ? date('d-M-Y', strtotime($che->reported_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Method</td>
                            <td>: {{ $che->method != null ? $che->method : '' }}

                            </td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>1<sup>st</sup> Test</th>
                            <th>2<sup>st</sup> Test</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr style="border-color: #F5F7FF;">
                            <td>{{ $che->ki }}</td>
                            <td>{{ $che->ki_test1 }}</td>
                            <td>{{ $che->ki_test2 }}</td>
                        </tr>

                        <tr style="border-color: #F5F7FF;">
                            <td>{{ $che->distilled_water }}</td>
                            <td>{{ $che->distilled_water_test1 }}</td>
                            <td>{{ $che->distilled_water_test2 }}</td>
                        </tr>

                        <tr style="border-color: #F5F7FF;">
                            <td>{{ $che->acetic_acid }}</td>
                            <td>{{ $che->acetic_acid_test1 }}</td>
                            <td>{{ $che->acetic_acid_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->sample }}</td>
                            <td>{{ $che->sample_test1 }}</td>
                            <td>{{ $che->sample_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->titration }}</td>
                            <td>{{ $che->titration_test1 }}</td>
                            <td>{{ $che->titration_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->blank }}</td>
                            <td>{{ $che->blank_test1 }}</td>
                            <td>{{ $che->blank_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->sodium }}</td>
                            <td>{{ $che->sodium_test1 }}</td>
                            <td>{{ $che->sodium_test2 }}</td>
                        </tr>

                        <tr>
                            <td colspan="3">Calculation</td>
                        </tr>

                        <tr>
                            <td>{{ $che->cl_cal }}</td>
                            <td>{{ $che->cl_cal_test1 }}</td>
                            <td>{{ $che->cl_cal_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->result }}</td>
                            <td>{{ $che->result_test1 }}</td>
                            <td>{{ $che->result_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->cl }}</td>
                            <td>{{ $che->cl_test1 }}</td>
                            <td>{{ $che->cl_test2 }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-sm-6 my-3">

                <span>Analysed by Sign:
                    @if ($che->analysed_sign != null)
                        <img src="{{ asset('photos/other_fche040039s/analysed_sign/' . $che->analysed_sign) }}"
                            alt="" style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Checked by Sign:
                    @if ($che->checked_sign != null)
                        <img src="{{ asset('photos/other_fche040039s/checked_sign/' . $che->checked_sign) }}"
                            alt="" style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">
                <span>Date: <b>{{ date('d-M-Y', strtotime($che->analysed_date)) }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Date: <b>{{ date('d-M-Y', strtotime($che->checked_date)) }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Name: <b>{{ $che->analysed_name }}</b></span>
            </div>
            <div class="col-sm-6 my-3">
                <span>Name: <b>{{ $che->checked_name }}</b></span>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
