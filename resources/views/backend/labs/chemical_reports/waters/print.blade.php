@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('waters.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $water->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $water->company_name != null ? $water->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $water->address != null ? $water->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $water->phone != null ? $water->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $water->lab_received_date != null ? date('d-M-Y', strtotime($water->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $water->sample_number != null ? $water->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $water->product_name != null ? $water->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $water->test_performed_date != null ? date('d-M-Y', strtotime($water->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $water->test_type != null ? $water->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $water->issue_date != null ? date('d-M-Y', strtotime($water->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $water->results != null ? $water->results : '' }}</td>
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
                <td>{{ $water->total_para }}</td>
                <td>{{ $water->total_method }}</td>
                <td>{{ $water->total_result }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $water->calcium_para }}</td>
                <td>{{ $water->calcium_method }}</td>
                <td>{{ $water->calcium_result }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $water->mag_para }}</td>
                <td>{{ $water->mag_method }}</td>
                <td>{{ $water->mag_result }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $water->solid_para }}</td>
                <td>{{ $water->solid_method }}</td>
                <td>{{ $water->solid_result }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $water->dissolved_para }}</td>
                <td>{{ $water->dissolved_method }}</td>
                <td>{{ $water->dissolved_result }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $water->suspended_para }}</td>
                <td>{{ $water->suspended_method }}</td>
                <td>{{ $water->suspended_result }}</td>
            </tr>

            <tr>
                <td>7</td>
                <td>{{ $water->ph_para }}</td>
                <td>{{ $water->ph_method }}</td>
                <td>{{ $water->ph_result }}</td>
            </tr>

            <tr>
                <td>8</td>
                <td>{{ $water->conductivity_para }}</td>
                <td>{{ $water->conductivity_method }}</td>
                <td>{{ $water->conductivity_result }}</td>
            </tr>
        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $water->method != null ? $water->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">water Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $water->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $water->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $water->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $water->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $water->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/cr_waters/' . $water->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $water->date ? date('d-M-Y', strtotime($water->date)) : '-' }}</b><br></b></h4>
            <h4><b>{{ $water->checked_name != null ? $water->checked_name : '' }}</b></h4>
            <h4><b>{{ $water->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
