@extends('backend.main')

@section('lab-active', 'active')

@section('fche040029-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('fche040029.index') }}">
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
                <h5 class="text-center"><b>WORK SHEET FOR DETERMINATION OF FATTY ACID PROFILE </b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>FIDSL-Che-04-00/29</b></p>
            </div>

            <div class="col-sm-12">
                <h5>SAMPLE IDENTIFICATION</h5>
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $che->job_number != null ? $che->job_number : '' }}</td>
                        </tr>
                        <tr>
                            <td>Sample Name</td>
                            <td>: {{ $che->sample_name != null ? $che->sample_name : '' }}</td>
                        </tr>
                        <tr>
                            <td>Date Received</td>
                            <td>: {{ $che->received_date != null ? date('d-M-Y', strtotime($che->received_date)) : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Date Initiated for Analysis</td>
                            <td>: {{ $che->initiated_date != null ? date('d-M-Y', strtotime($che->initiated_date)) : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Date Reported</td>
                            <td>: {{ $che->reported_date != null ? date('d-M-Y', strtotime($che->reported_date)) : '' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Method</td>
                            <td>: {{ $che->method }}</td>
                            {{-- <td>: @foreach ($methods as $method)
                                    @if ($method->id == $che->method)
                                        {{ $method->name }}
                                    @endif
                                @endforeach
                            </td> --}}
                        </tr>
                    </table>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>1<sup>st</sup></th>
                            <th>2<sup>nd</sup></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{ $che->sample_weight }}</td>
                            <td>{{ $che->sample_weight_1 }}</td>
                            <td>{{ $che->sample_weight_2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->koh_volume }}</td>
                            <td>{{ $che->koh_volume_1 }}</td>
                            <td>{{ $che->koh_volume_2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->koh_heating_time }}</td>
                            <td>{{ $che->koh_heating_time_1 }}</td>
                            <td>{{ $che->koh_heating_time_2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->boron_volume }}</td>
                            <td>{{ $che->boron_volume_1 }}</td>
                            <td>{{ $che->boron_volume_2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->boron_heating_time }}</td>
                            <td>{{ $che->boron_heating_time_1 }}</td>
                            <td>{{ $che->boron_heating_time_2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->potassium_weight }}</td>
                            <td>{{ $che->potassium_weight_1 }}</td>
                            <td>{{ $che->potassium_weight_2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->water_volume }}</td>
                            <td>{{ $che->water_volume_1 }}</td>
                            <td>{{ $che->water_volume_2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->petro_volume }}</td>
                            <td>{{ $che->petro_volume_1 }}</td>
                            <td>{{ $che->petro_volume_2 }}</td>
                        </tr>

                        <tr>
                            <td>{{ $che->chlo_volume }}</td>
                            <td>{{ $che->chlo_volume_1 }}</td>
                            <td>{{ $che->chlo_volume_2 }}</td>
                        </tr>

                        <tr>
                            <td>Result</td>
                            <td colspan="2" class="text-center">see instrument data sheet</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                @if ($che->remark)
                    <span>Remark : {{ $che->remark }}</span>
                @else
                    <span>Remark: ND = Not Detected</span>
                @endif
            </div>

            <div class="col-sm-6 my-3">

                <span>Analysed by Sign:
                    @if ($che->analysed_sign != null)
                        <img src="{{ asset('photos/gc_fche040029s/analysed_sign/' . $che->analysed_sign) }}" alt=""
                            style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Checked by Sign:
                    @if ($che->checked_sign != null)
                        <img src="{{ asset('photos/gc_fche040029s/checked_sign/' . $che->checked_sign) }}" alt=""
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
