@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('wjsas.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $wjsa->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $wjsa->company_name != null ? $wjsa->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $wjsa->address != null ? $wjsa->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $wjsa->phone != null ? $wjsa->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $wjsa->lab_received_date != null ? date('d-M-Y', strtotime($wjsa->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $wjsa->sample_number != null ? $wjsa->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $wjsa->product_name != null ? $wjsa->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $wjsa->test_performed_date != null ? date('d-M-Y', strtotime($wjsa->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $wjsa->test_type != null ? $wjsa->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $wjsa->issue_date != null ? date('d-M-Y', strtotime($wjsa->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $wjsa->results != null ? $wjsa->results : '' }}</td>
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
                <th>Before Result</th>
                <th>After Result</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>{{ $wjsa->apc_para }}</td>
                <td>{{ $wjsa->apc_method }}</td>
                <td>{{ $wjsa->apc_result }}</td>
                <td>{{ $wjsa->apc_before }}</td>
                <td>{{ $wjsa->apc_after }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $wjsa->coliform_para }}</td>
                <td>{{ $wjsa->coliform_method }}</td>
                <td>{{ $wjsa->coliform_result }}</td>
                <td>{{ $wjsa->coliform_before }}</td>
                <td>{{ $wjsa->coliform_after }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $wjsa->coli_para }}</td>
                <td>{{ $wjsa->coli_method }}</td>
                <td>{{ $wjsa->coli_result }}</td>
                <td>{{ $wjsa->coli_before }}</td>
                <td>{{ $wjsa->coli_after }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $wjsa->staphy_para }}</td>
                <td>{{ $wjsa->staphy_method }}</td>
                <td>{{ $wjsa->staphy_result }}</td>
                <td>{{ $wjsa->staphy_before }}</td>
                <td>{{ $wjsa->staphy_after }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $wjsa->salmo_para }}</td>
                <td>{{ $wjsa->salmo_method }}</td>
                <td>{{ $wjsa->salmo_result }}</td>
                <td>{{ $wjsa->salmo_before }}</td>
                <td>{{ $wjsa->salmo_after }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $wjsa->yeast_mould_para }}</td>
                <td>{{ $wjsa->yeast_mould_method }}</td>
                <td>{{ $wjsa->yeast_mould_result }}</td>
                <td>{{ $wjsa->yeast_mould_before }}</td>
                <td>{{ $wjsa->yeast_mould_after }}</td>
            </tr>

        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $wjsa->method != null ? $wjsa->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">wjsa Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $wjsa->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $wjsa->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $wjsa->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $wjsa->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $wjsa->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/mr_wjsas/' . $wjsa->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $wjsa->date ? date('d-M-Y', strtotime($wjsa->date)) : '-' }}</b><br></b></h4>
            <h4><b>{{ $wjsa->checked_name != null ? $wjsa->checked_name : '' }}</b></h4>
            <h4><b>{{ $wjsa->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
