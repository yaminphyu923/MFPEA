@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('car0501s_17.index') }}">
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

    <div class="flex-container">
        <div class="analysis" style="flex-grow: 12">
            ANALYSIS RESULTS
        </div>
        <div class="gc-form" style="flex-grow: 1">F-Car-05-01</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Job Number</td>
                <td>: {{ $car->job_number != null ? $car->job_number : '' }}</td>
            </tr>
            <tr>
                <td>2.Analysis Report No.</td>
                <td>: {{ $car->report_number != null ? $car->report_number : '' }}</td>
            </tr>
            <tr>
                <td>3.Sample Name</td>
                <td>: {{ $car->sample_name != null ? $car->sample_name : '' }}</td>
            </tr>
            <tr>
                <td>4.Received Date</td>
                <td>: {{ $car->received_date != null ? date('d-M-Y', strtotime($car->received_date)) : '-' }}</td>
            </tr>
            <tr>
                <td>5.Analysis Date</td>
                <td>: {{ $car->analysis_date != null ? date('d-M-Y', strtotime($car->analysis_date)) : '-' }}</td>
            </tr>
            <tr>
                <td>6.Issue Date</td>
                <td>: {{ $car->issue_date != null ? date('d-M-Y', strtotime($car->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>7.Result</td>
                <td>: {{ $car->result != null ? $car->result : '' }}</td>
            </tr>
        </table>
    </div>


    <table class="gc-table table table-bordered">
        <thead>
            <tr>
                <th>Sr.No</th>
                <th>Test Parameter</th>
                <th>Test Method</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1.</td>
                <td>{{ $car->lauric_12_0_para }}</td>
                <td rowspan="17" class="text-center">{{ $car->lauric_12_0_method }}</td>
                <td>{{ $car->lauric_12_0_result }}</td>
            </tr>

            <tr>
                <td>2.</td>
                <td>{{ $car->myristic_14_0_para }}</td>
                <td>{{ $car->myristic_14_0_result }}</td>
            </tr>

            <tr>
                <td>3.</td>
                <td>{{ $car->myristoleic_14_1_para }}</td>
                <td>{{ $car->myristoleic_14_1_result }}</td>
            </tr>

            <tr>
                <td>4.</td>
                <td>{{ $car->palmitic_16_0_para }}</td>
                <td>{{ $car->palmitic_16_0_result }}</td>
            </tr>

            <tr>
                <td>5.</td>
                <td>{{ $car->palmitoleic_16_1_para }}</td>
                <td>{{ $car->palmitoleic_16_1_result }}</td>
            </tr>

            <tr>
                <td>6.</td>
                <td>{{ $car->stearic_18_0_para }}</td>
                <td>{{ $car->stearic_18_0_result }}</td>
            </tr>

            <tr>
                <td>7.</td>
                <td>{{ $car->oleictrans_18_1_para }}</td>
                <td>{{ $car->oleictrans_18_1_result }}</td>
            </tr>

            <tr>
                <td>8.</td>
                <td>{{ $car->oleic_18_1_para }}</td>
                <td>{{ $car->oleic_18_1_result }}</td>
            </tr>

            <tr>
                <td>9.</td>
                <td>{{ $car->linoleictrans_18_2_para }}</td>
                <td>{{ $car->linoleictrans_18_2_result }}</td>
            </tr>

            <tr>
                <td>10.</td>
                <td>{{ $car->linoleic_18_2_para }}</td>
                <td>{{ $car->linoleic_18_2_result }}</td>
            </tr>

            <tr>
                <td>11.</td>
                <td>{{ $car->linoleic_18_3_para }}</td>
                <td>{{ $car->linoleic_18_3_result }}</td>
            </tr>

            <tr>
                <td>12.</td>
                <td>{{ $car->arachidic_20_0_para }}</td>
                <td>{{ $car->arachidic_20_0_result }}</td>
            </tr>

            <tr>
                <td>13.</td>
                <td>{{ $car->paullinic_20_1_para }}</td>
                <td>{{ $car->paullinic_20_1_result }}</td>
            </tr>

            <tr>
                <td>14.</td>
                <td>{{ $car->arachidonic_20_4_para }}</td>
                <td>{{ $car->arachidonic_20_4_result }}</td>
            </tr>

            <tr>
                <td>15.</td>
                <td>{{ $car->bchenic_22_0_para }}</td>
                <td>{{ $car->bchenic_22_0_result }}</td>
            </tr>

            <tr>
                <td>16.</td>
                <td>{{ $car->erucic_22_1_para }}</td>
                <td>{{ $car->erucic_22_1_result }}</td>
            </tr>

            <tr>
                <td>17.</td>
                <td>{{ $car->lignoceric_24_0_para }}</td>
                <td>{{ $car->lignoceric_24_0_result }}</td>
            </tr>

            {{-- @foreach ($car_test_fills as $car_test_fill)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $car_test_fill->test_parameter }}</td>
                    <td>{{ $car_test_fill->test_method }}</td>
                    <td>{{ $car_test_fill->test_result }}</td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Remark</h4>
        </div>
        <div>
            {{-- <h4>: <b>{{ $car->remark != null ? $car->remark : '' }}</b></h4> --}}

            <h4>: <b> ND = Not Detected</b></h4>
        </div>
    </div>

    <div class="flex-container">
        <div style="flex-grow: 2">
            <h4>Signature</h4>
            <h4>Name</h4>
            <h4>Position</h4>
        </div>

        <div class="sign" style="flex-grow: 2">
            : <img src="{{ asset('photos/gc_car0501s/' . $car->sign) }}" alt="" style="width:100px;">
            <h4>: <b>{{ $car->name != null ? $car->name : '' }}</b></h4>
            <h4>: <b>{{ $car->position != null ? $car->position : '' }}</b></h4>
        </div>

        <div style="flex-grow: 2">
            <h4>Check By</h4>
            <h4>Check By</h4>
        </div>

        <div class="sign" style="flex-grow: 2">
            <h4>: <b>{{ $car->checkby1 != null ? $car->checkby1 : '' }}</b></h4>
            <h4>: <b>{{ $car->checkby2 != null ? $car->checkby2 : '' }}</b></h4>
        </div>

    </div>
@endsection
