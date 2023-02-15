@extends('backend.main')

@section('lab-active', 'active')

@section('f04che15-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('f04che15.index') }}">
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
                <h5 class="text-center"><b>WORKSHEET FOR DETERMINATION OF ACIDITY</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>FIDSL-04-Che/15</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $f04che15->job_number != null ? $f04che15->job_number : '' }}</td>

                            <td style="width:300px;">Product Name</td>
                            <td>: {{ $f04che15->product_name != null ? $f04che15->product_name : '' }}</td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Received</td>
                            <td>:
                                {{ $f04che15->received_date != null ? date('d-M-Y', strtotime($f04che15->received_date)) : '' }}
                            </td>

                            <td style="width:300px;">Date Initiated for Analysis</td>
                            <td>:
                                {{ $f04che15->analysed_date != null ? date('d-M-Y', strtotime($f04che15->analysed_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Reported</td>
                            <td>:
                                {{ $f04che15->reported_date != null ? date('d-M-Y', strtotime($f04che15->reported_date)) : '' }}
                            </td>

                            <td style="width:300px;">Method</td>
                            <td>: {{ $f04che15->method != null ? $f04che15->method : '' }}</td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Sample Preparation</td>
                            <td>: {{ $f04che15->sample_preparation != null ? $f04che15->sample_preparation : '' }}</td>

                            <td style="width:300px;">Weight of Sample</td>
                            <td>: {{ $f04che15->sample_weight != null ? $f04che15->sample_weight : '' }}</td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Volume of Water</td>
                            <td>: {{ $f04che15->water_volume != null ? $f04che15->water_volume : '' }}</td>

                            <td style="width:300px;">Blending and Filtration</td>
                            <td>: {{ $f04che15->blending != null ? $f04che15->blending : '' }}</td>
                        </tr>

                        <tr>
                            <td>Customer</td>
                            <td>: {{ $f04che15->customer != null ? $f04che15->customer->name : '' }}</td>
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
                <span>Analysed by : <b>{{ $f04che15->analyzed_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $f04che15->checked_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($f04che15->analysed_sign != null)
                        <img src="{{ asset('photos/other_f04che15s/analysed_sign/' . $f04che15->analysed_sign) }}"
                            alt="" style="width:100px;">

                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f04che15->analysed_date)) }}</b></h5>
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($f04che15->checked_sign != null)
                        <img src="{{ asset('photos/other_f04che15s/checked_sign/' . $f04che15->checked_sign) }}"
                            alt="" style="width:100px;">
                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f04che15->checked_date)) }}</b></h5>
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
