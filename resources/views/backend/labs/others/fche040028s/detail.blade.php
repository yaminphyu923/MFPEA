@extends('backend.main')

@section('lab-active', 'active')

@section('fche040028-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche040028.index') }}">
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
                <h5 class="text-center"><b>WORKSHEET FOR DETERMINATION OF EXTRACTIVE</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>FIDSL-Che-04-00/28</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>:
                                {{ $fche040028->job_number != null ? $fche040028->job_number : '' }}</td>
                        </tr>
                        <tr>
                            <td style="width:300px;">Sample Name</td>
                            <td>: {{ $fche040028->sample_name != null ? $fche040028->sample_name : '' }}</td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Received</td>
                            <td>:
                                {{ $fche040028->received_date != null ? date('d-M-Y', strtotime($fche040028->received_date)) : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:300px;">Date Initiated for Analysis</td>
                            <td>:
                                {{ $fche040028->initiated_date != null ? date('d-M-Y', strtotime($fche040028->initiated_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Reported</td>
                            <td>:
                                {{ $fche040028->reported_date != null ? date('d-M-Y', strtotime($fche040028->reported_date)) : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:300px;">Method</td>
                            <td>: {{ $fche040028->method != null ? $fche040028->method : '' }}</td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
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
            </div>

            <div class="col-sm-6 my-3">
                <span>Analysed by : <b>{{ $fche040028->analysed_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $fche040028->checked_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($fche040028->analysed_sign != null)
                        <img src="{{ asset('photos/other_fche040028s/analysed_sign/' . $fche040028->analysed_sign) }}"
                            alt="" style="width:100px;">

                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($fche040028->analysed_date)) }}</b></h5>
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($fche040028->checked_sign != null)
                        <img src="{{ asset('photos/other_fche040028s/checked_sign/' . $fche040028->checked_sign) }}"
                            alt="" style="width:100px;">
                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($fche040028->checked_date)) }}</b></h5>
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
