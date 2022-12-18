@extends('backend.main')

@section('lab-active', 'active')

@section('wtfcar0502-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('wtfcar0502.index') }}">
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
                <h5 class="text-center"><b>ANALYSIS RESULTS</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>F-CAR-05-02</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $che->job_number != null ? $che->job_number : '' }}</td>
                        </tr>

                        <tr>
                            <td>Analysis Report No</td>
                            <td>: {{ $che->report_no != null ? $che->report_no : '-' }}</td>
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
                            <td>Analysis Date</td>
                            <td>: {{ $che->analysis_date != null ? date('d-M-Y', strtotime($che->analysis_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Issue Date</td>
                            <td>: {{ $che->issue_date != null ? date('d-M-Y', strtotime($che->issue_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td>Result</td>
                            <td>: {{ $che->result != null ? $che->result : '' }}

                            </td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Test Parameter</th>
                            <th>Test Method</th>
                            <th>Result</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{ $che->total_para }}</td>
                            <td>{{ $che->total_method }}</td>
                            <td>{{ $che->total_result }}</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>{{ $che->calcium_para }}</td>
                            <td>{{ $che->calcium_method }}</td>
                            <td>{{ $che->calcium_result }}</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>{{ $che->magnesium_para }}</td>
                            <td>{{ $che->magnesium_method }}</td>
                            <td>{{ $che->magnesium_result }}</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>{{ $che->solid_para }}</td>
                            <td>{{ $che->solid_method }}</td>
                            <td>{{ $che->solid_result }}</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>{{ $che->dissolved_para }}</td>
                            <td>{{ $che->dissolved_method }}</td>
                            <td>{{ $che->dissolved_result }}</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>{{ $che->suspended_para }}</td>
                            <td>{{ $che->suspended_method }}</td>
                            <td>{{ $che->suspended_result }}</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>{{ $che->ph_para }}</td>
                            <td>{{ $che->ph_method }}</td>
                            <td>{{ $che->ph_result }}</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>{{ $che->conductivity_para }}</td>
                            <td>{{ $che->conductivity_method }}</td>
                            <td>{{ $che->conductivity_result }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 my-3">

                <h5>Remark: {{ $che->remark }}</h5>

                <span>Sign:
                    @if ($che->sign != null)
                        <img src="{{ asset('photos/wt_wtfcar0502s/' . $che->sign) }}" alt="" style="width:100px;">
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-12 my-3">
                <span>Name: <b>{{ $che->name }}</b></span>
            </div>
            <div class="col-sm-12 my-3">
                <span>Position: <b>{{ $che->position }}</b></span>
            </div>

            <div class="col-sm-12 my-3">
                <span>Check By: <b>{{ $che->check1 }}</b></span>
            </div>

            <div class="col-sm-12 my-3">
                <span>Check By: <b>{{ $che->check2 }}</b></span>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
