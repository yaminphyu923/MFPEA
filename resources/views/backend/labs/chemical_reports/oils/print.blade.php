@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('oils.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $oil->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $oil->company_name != null ? $oil->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $oil->address != null ? $oil->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $oil->phone != null ? $oil->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $oil->lab_received_date != null ? date('d-M-Y', strtotime($oil->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $oil->sample_number != null ? $oil->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $oil->product_name != null ? $oil->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $oil->test_performed_date != null ? date('d-M-Y', strtotime($oil->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $oil->test_type != null ? $oil->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $oil->issue_date != null ? date('d-M-Y', strtotime($oil->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $oil->results != null ? $oil->results : '' }}</td>
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
                <td>{{ $oil->gravity_para }}</td>
                <td>{{ $oil->gravity_method }}</td>
                <td>{{ $oil->gravity_result }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $oil->index_para }}</td>
                <td>{{ $oil->index_method }}</td>
                <td>{{ $oil->index_result }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $oil->sapo_para }}</td>
                <td>{{ $oil->sapo_method }}</td>
                <td>{{ $oil->sapo_result }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $oil->unsapo_para }}</td>
                <td>{{ $oil->unsapo_method }}</td>
                <td>{{ $oil->unsapo_result }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $oil->iodine_para }}</td>
                <td>{{ $oil->iodine_method }}</td>
                <td>{{ $oil->iodine_result }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $oil->acid_para }}</td>
                <td>{{ $oil->acid_method }}</td>
                <td>{{ $oil->acid_result }}</td>
            </tr>

            <tr>
                <td>7</td>
                <td>{{ $oil->peroxide_para }}</td>
                <td>{{ $oil->peroxide_method }}</td>
                <td>{{ $oil->peroxide_result }}</td>
            </tr>

            <tr>
                <td>8</td>
                <td>{{ $oil->moisture_para }}</td>
                <td>{{ $oil->moisture_method }}</td>
                <td>{{ $oil->moisture_result }}</td>
            </tr>
        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $oil->method != null ? $oil->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">oil Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $oil->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $oil->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $oil->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $oil->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $oil->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/cr_oils/' . $oil->sign) }}" alt="" style="width:100px;">
            {{-- <h4><b>{{ $oil->date ? date('d-M-Y', strtotime($oil->date)) : '-' }}</b><br></b></h4> --}}
            <h4><b>{{ $oil->checked_name != null ? $oil->checked_name : '' }}</b></h4>
            <h4><b>{{ $oil->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
