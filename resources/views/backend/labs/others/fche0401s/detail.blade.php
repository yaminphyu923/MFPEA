@extends('backend.main')

@section('lab-active', 'active')

@section('fche0401-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche0401.index') }}">
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
                <h5 class="text-center"><b>WORKSHEET FOR DETERMINATION OF TOTAL VOLATILE BASIC
                        NITROGEN(TVBN)</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>FIDSL-Che-04-01</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>:
                                {{ $fche0401->job_number != null ? $fche0401->job_number : '' }}</td>
                        </tr>
                        <tr>
                            <td style="width:300px;">Sample Name</td>
                            <td>: {{ $fche0401->sample_name != null ? $fche0401->sample_name : '' }}</td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Received</td>
                            <td>:
                                {{ $fche0401->received_date != null ? date('d-M-Y', strtotime($fche0401->received_date)) : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:300px;">Date Initiated for Analysis</td>
                            <td>:
                                {{ $fche0401->initiated_date != null ? date('d-M-Y', strtotime($fche0401->initiated_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Reported</td>
                            <td>:
                                {{ $fche0401->reported_date != null ? date('d-M-Y', strtotime($fche0401->reported_date)) : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td style="width:300px;">Method</td>
                            <td>: {{ $fche0401->method != null ? $fche0401->method : '' }}</td>
                        </tr>

                        <tr>
                            <td>Customer</td>
                            <td>: {{ $fche0401->customer != null ? $fche0401->customer->name : '' }}</td>
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
                        @foreach ($fts as $ft)
                            <tr>
                                <td>{{ $ft->data }}</td>
                                <td>{{ $ft->test1 }}</td>
                                <td>{{ $ft->test2 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-sm-6 my-3">
                <span>Analysed by : <b>{{ $fche0401->analysed_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $fche0401->checked_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($fche0401->analysed_sign != null)
                        <img src="{{ asset('photos/other_fche0401s/analysed_sign/' . $fche0401->analysed_sign) }}"
                            alt="" style="width:100px;">

                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($fche0401->analysed_date)) }}</b></h5>
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($fche0401->checked_sign != null)
                        <img src="{{ asset('photos/other_fche0401s/checked_sign/' . $fche0401->checked_sign) }}"
                            alt="" style="width:100px;">
                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($fche0401->checked_date)) }}</b></h5>
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
