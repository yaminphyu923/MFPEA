@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('nutritions.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $nutrition->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $nutrition->company_name != null ? $nutrition->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $nutrition->address != null ? $nutrition->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $nutrition->phone != null ? $nutrition->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $nutrition->lab_received_date != null ? date('d-M-Y', strtotime($nutrition->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $nutrition->sample_number != null ? $nutrition->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $nutrition->product_name != null ? $nutrition->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $nutrition->test_performed_date != null ? date('d-M-Y', strtotime($nutrition->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $nutrition->test_type != null ? $nutrition->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $nutrition->issue_date != null ? date('d-M-Y', strtotime($nutrition->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $nutrition->results != null ? $nutrition->results : '' }}</td>
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
            <tr>
                <td>1</td>
                <td>{{ $nutrition->moisture_para }}</td>
                <td>{{ $nutrition->moisture_method }}</td>
                <td>{{ $nutrition->moisture_result }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $nutrition->ash_para }}</td>
                <td>{{ $nutrition->ash_method }}</td>
                <td>{{ $nutrition->ash_result }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $nutrition->protein_para }}</td>
                <td>{{ $nutrition->protein_method }}</td>
                <td>{{ $nutrition->protein_result }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $nutrition->fiber_para }}</td>
                <td>{{ $nutrition->fiber_method }}</td>
                <td>{{ $nutrition->fiber_result }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $nutrition->fat_para }}</td>
                <td>{{ $nutrition->fat_method }}</td>
                <td>{{ $nutrition->fat_result }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $nutrition->carbo_para }}</td>
                <td>{{ $nutrition->carbo_method }}</td>
                <td>{{ $nutrition->carbo_result }}</td>
            </tr>

            <tr>
                <td>7</td>
                <td>{{ $nutrition->energy_para }}</td>
                <td>{{ $nutrition->energy_method }}</td>
                <td>{{ $nutrition->energy_result }}</td>
            </tr>

            <tr>
                <td>8</td>
                <td>{{ $nutrition->sodium_para }}</td>
                <td>{{ $nutrition->sodium_method }}</td>
                <td>{{ $nutrition->sodium_result }}</td>
            </tr>
        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $nutrition->method != null ? $nutrition->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">Nutrition Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $nutrition->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $nutrition->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $nutrition->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $nutrition->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $nutrition->sodium_result }} g</p>
                </div>
            </div>
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/cr_nutritions/' . $nutrition->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $nutrition->date ? date('d-M-Y', strtotime($nutrition->date)) : '-' }}</b><br></b></h4>
            <h4><b>{{ $nutrition->checked_name != null ? $nutrition->checked_name : '' }}</b></h4>
            <h4><b>{{ $nutrition->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
