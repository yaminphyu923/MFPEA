@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('others.index') }}">
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

    <div class="flex-container" style="margin-bottom:10px;">
        <div style="flex-grow: 5">

        </div>
        <div class="analysis" style="flex-grow: 15">
            LABORATORY ANALYSIS REPORT
        </div>
        <div class="gc-form" style="flex-grow: 1">{{ $other->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $other->company_name != null ? $other->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $other->address != null ? $other->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $other->phone != null ? $other->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $other->lab_received_date != null ? date('d-M-Y', strtotime($other->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $other->sample_number != null ? $other->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $other->product_name != null ? $other->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $other->test_performed_date != null ? date('d-M-Y', strtotime($other->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $other->test_type != null ? $other->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $other->issue_date != null ? date('d-M-Y', strtotime($other->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $other->results != null ? $other->results : '' }}</td>
            </tr>
        </table>
    </div>

    <h4 style="text-align: center;">(This Laboratory analysis report is based solely on the sample(s) submitted by the
        customer.)
    </h4>

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
            @foreach ($other_tests as $other_test)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $other_test->test_parameter }}</td>
                    <td>{{ $other_test->test_method }}</td>
                    <td>{{ $other_test->result }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $other->method != null ? $other->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">other Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $other->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $other->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $other->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $other->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $other->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/cr_others/' . $other->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $other->date ? date('d-M-Y', strtotime($other->date)) : '-' }}</b><br></b></h4>
            <h4><b>{{ $other->checked_name != null ? $other->checked_name : '' }}</b></h4>
            <h4><b>{{ $other->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
