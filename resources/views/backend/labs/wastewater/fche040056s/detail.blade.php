@extends('backend.main')

@section('lab-active', 'active')

@section('fche040056-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche040056.index') }}">
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
                <h5 class="text-center"><b>WORK SHEET FOR DETERMINATION OF TOTAL PHOSPHORUS</b>
                </h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>FIDSL-Che-04-00/56</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $che->job_number != null ? $che->job_number : '' }}</td>
                        </tr>
                        <tr>
                            <td>Product Name</td>
                            <td>: {{ $che->product_name != null ? $che->product_name : '-' }}</td>
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

                        <tr>
                            <td>{{ $che->volume }}</td>
                            <td>{{ $che->volume_test1 }}</td>
                            <td>{{ $che->volume_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->dilution }}</td>
                            <td>{{ $che->dilution_test1 }}</td>
                            <td>{{ $che->dilution_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->potassium }}</td>
                            <td>{{ $che->potassium_test1 }}</td>
                            <td>{{ $che->potassium_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->temperature }}</td>
                            <td>{{ $che->temperature_test1 }}</td>
                            <td>{{ $che->temperature_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->reactor_time }}</td>
                            <td>{{ $che->reactor_time_test1 }}</td>
                            <td>{{ $che->reactor_time_test2 }}</td>
                        </tr>

                        <tr>
                            <td colspan="3">After Digestion,</td>
                        </tr>

                        <tr>
                            <td>{{ $che->sodium }}</td>
                            <td>{{ $che->sodium_test1 }}</td>
                            <td>{{ $che->sodium_test2 }}</td>
                        </tr>

                        <tr>
                            <td colspan="3">After Push ZERO,</td>
                        </tr>

                        <tr>
                            <td>{{ $che->phosver }}</td>
                            <td>{{ $che->phosver_test1 }}</td>
                            <td>{{ $che->phosver_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->reaction_time }}</td>
                            <td>{{ $che->reaction_time_test1 }}</td>
                            <td>{{ $che->reaction_time_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->reading }}</td>
                            <td>{{ $che->reading_test1 }}</td>
                            <td>{{ $che->reading_test2 }}</td>
                        </tr>


                        <tr>
                            <td colspan="3">Calculation</td>
                        </tr>

                        <tr>
                            <td>{{ $che->phos }}</td>
                            <td>{{ $che->phos_test1 }}</td>
                            <td>{{ $che->phos_test2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->result }}</td>
                            <td>{{ $che->result_test1 }}</td>
                            <td>{{ $che->result_test2 }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-sm-6 my-3">

                <span>Analysed by Sign:
                    @if ($che->analysed_sign != null)
                        <img src="{{ asset('photos/ww_fche040056s/analysed_sign/' . $che->analysed_sign) }}" alt=""
                            style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Checked by Sign:
                    @if ($che->checked_sign != null)
                        <img src="{{ asset('photos/ww_fche040056s/checked_sign/' . $che->checked_sign) }}" alt=""
                            style="width:100px;">
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
