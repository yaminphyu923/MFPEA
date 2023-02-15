@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('heavy_metals.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $heavy_metal->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $heavy_metal->company_name != null ? $heavy_metal->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $heavy_metal->address != null ? $heavy_metal->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $heavy_metal->phone != null ? $heavy_metal->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $heavy_metal->lab_received_date != null ? date('d-M-Y', strtotime($heavy_metal->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $heavy_metal->sample_number != null ? $heavy_metal->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $heavy_metal->product_name != null ? $heavy_metal->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $heavy_metal->test_performed_date != null ? date('d-M-Y', strtotime($heavy_metal->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $heavy_metal->test_type != null ? $heavy_metal->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $heavy_metal->issue_date != null ? date('d-M-Y', strtotime($heavy_metal->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $heavy_metal->results != null ? $heavy_metal->results : '' }}</td>
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
                <td>{{ $heavy_metal->as_para }}</td>
                <td>{{ $heavy_metal->as_method }}</td>
                <td>{{ $heavy_metal->as_result }}</td>
                <td>{{ $heavy_metal->as_unit }}</td>
                <td>{{ $heavy_metal->as_limit }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $heavy_metal->pb_para }}</td>
                <td>{{ $heavy_metal->pb_method }}</td>
                <td>{{ $heavy_metal->pb_result }}</td>
                <td>{{ $heavy_metal->pb_unit }}</td>
                <td>{{ $heavy_metal->pb_limit }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $heavy_metal->cu_para }}</td>
                <td>{{ $heavy_metal->cu_method }}</td>
                <td>{{ $heavy_metal->cu_result }}</td>
                <td>{{ $heavy_metal->cu_unit }}</td>
                <td>{{ $heavy_metal->cu_limit }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $heavy_metal->zn_para }}</td>
                <td>{{ $heavy_metal->zn_method }}</td>
                <td>{{ $heavy_metal->zn_result }}</td>
                <td>{{ $heavy_metal->zn_unit }}</td>
                <td>{{ $heavy_metal->zn_limit }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $heavy_metal->hg_para }}</td>
                <td>{{ $heavy_metal->hg_method }}</td>
                <td>{{ $heavy_metal->hg_result }}</td>
                <td>{{ $heavy_metal->hg_unit }}</td>
                <td>{{ $heavy_metal->hg_limit }}</td>
            </tr>
        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Remarks</h4>
        </div>
        <div>
            <h4>: <b>ND = Not Detected</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">heavy_metal Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $heavy_metal->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $heavy_metal->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $heavy_metal->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $heavy_metal->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $heavy_metal->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/cr_heavy_metals/' . $heavy_metal->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $heavy_metal->date ? date('d-M-Y', strtotime($heavy_metal->date)) : '-' }}</b><br></b></h4>
            <h4><b>{{ $heavy_metal->checked_name != null ? $heavy_metal->checked_name : '' }}</b></h4>
            <h4><b>{{ $heavy_metal->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
