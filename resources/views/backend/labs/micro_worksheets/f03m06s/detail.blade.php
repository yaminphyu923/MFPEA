@extends('backend.main')

@section('lab-active', 'active')

@section('f03m06-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('f03m06.index') }}">
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
                <h5 class="text-center"><b>WORKSHEET FOR YEAST AND MOULD COUNT</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>FIDSL-03-M-06</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $f03m06->job_number != null ? $f03m06->job_number : '' }}</td>

                            <td style="width:300px;">Product Name</td>
                            <td>: {{ $f03m06->product_name != null ? $f03m06->product_name : '' }}</td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Received</td>
                            <td>:
                                {{ $f03m06->received_date != null ? date('d-M-Y', strtotime($f03m06->received_date)) : '' }}
                            </td>

                            <td style="width:300px;">Date Initiated for Analysis</td>
                            <td>:
                                {{ $f03m06->initiated_date != null ? date('d-M-Y', strtotime($f03m06->initiated_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Reported</td>
                            <td>:
                                {{ $f03m06->reported_date != null ? date('d-M-Y', strtotime($f03m06->reported_date)) : '' }}
                            </td>

                            <td style="width:300px;">Method</td>
                            <td>: {{ $f03m06->method != null ? $f03m06->method : '' }}</td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Incubation Period</td>
                            <td>:
                                {{ $f03m06->period != null ? $f03m06->period : '' }}
                            </td>

                            <td style="width:300px;">Food Homogenate</td>
                            <td>: {{ $f03m06->homogenate != null ? $f03m06->homogenate : '' }}</td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle;text-align:center;">Dilution</th>
                            <th colspan="2" style="text-align: center;">Yeast and Mould Count</th>
                        </tr>
                        <tr>
                            <th style="text-align: center;">Plate1</th>
                            <th style="text-align: center;">Plate2</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td style="text-align: center;">10<sup>0</sup></td>
                            <td style="text-align: center;">{{ $f03m06->zero_plate1 }}</td>
                            <td style="text-align: center;">{{ $f03m06->zero_plate2 }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">10<sup>-1</sup></td>
                            <td style="text-align: center;">{{ $f03m06->minus_one_plate1 }}</td>
                            <td style="text-align: center;">{{ $f03m06->minus_one_plate2 }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">10<sup>-2</sup></td>
                            <td style="text-align: center;">{{ $f03m06->minus_two_plate1 }}</td>
                            <td style="text-align: center;">{{ $f03m06->minus_two_plate2 }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">10<sup>-3</sup></td>
                            <td style="text-align: center;">{{ $f03m06->minus_three_plate1 }}</td>
                            <td style="text-align: center;">{{ $f03m06->minus_three_plate2 }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">10<sup>-4</sup></td>
                            <td style="text-align: center;">{{ $f03m06->minus_four_plate1 }}</td>
                            <td style="text-align: center;">{{ $f03m06->minus_four_plate2 }}</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">10<sup>-5</sup></td>
                            <td style="text-align: center;">{{ $f03m06->minus_five_plate1 }}</td>
                            <td style="text-align: center;">{{ $f03m06->minus_five_plate2 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                <span>Yeast and Mould Count : {{ $f03m06->yeast_mould }} cfu/g</span>
            </div>
            <div class="col-sm-6 my-3">
                <span>Analyzed by : <b>{{ $f03m06->analysed_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $f03m06->checked_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($f03m06->analysed_sign != null)
                        <img src="{{ asset('photos/mw_f03m06s/analysed_sign/' . $f03m06->analysed_sign) }}" alt=""
                            style="width:100px;">
                    @else
                        <span>____</span>
                    @endif

                    <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f03m06->analysed_date)) }}</b></h5>

                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($f03m06->checked_sign != null)
                        <img src="{{ asset('photos/mw_f03m06s/checked_sign/' . $f03m06->checked_sign) }}" alt=""
                            style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                    <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f03m06->checked_date)) }}</b></h5>

                </span>

            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
