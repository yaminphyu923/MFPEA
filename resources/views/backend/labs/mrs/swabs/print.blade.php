@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('swabs.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $swab->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $swab->company_name != null ? $swab->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $swab->address != null ? $swab->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $swab->phone != null ? $swab->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $swab->lab_received_date != null ? date('d-M-Y', strtotime($swab->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $swab->sample_number != null ? $swab->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $swab->product_name != null ? $swab->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $swab->test_performed_date != null ? date('d-M-Y', strtotime($swab->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $swab->test_type != null ? $swab->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $swab->issue_date != null ? date('d-M-Y', strtotime($swab->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $swab->results != null ? $swab->results : '' }}</td>
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
                <td>{{ $swab->apc_para }}</td>
                <td>{{ $swab->apc_method }}</td>
                <td>{{ $swab->apc_result }}</td>
                <td>{{ $swab->apc_before }}</td>
                <td>{{ $swab->apc_after }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $swab->coliform_para }}</td>
                <td>{{ $swab->coliform_method }}</td>
                <td>{{ $swab->coliform_result }}</td>
                <td>{{ $swab->coliform_before }}</td>
                <td>{{ $swab->coliform_after }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $swab->coli_para }}</td>
                <td>{{ $swab->coli_method }}</td>
                <td>{{ $swab->coli_result }}</td>
                <td>{{ $swab->coli_before }}</td>
                <td>{{ $swab->coli_after }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $swab->staphy_para }}</td>
                <td>{{ $swab->staphy_method }}</td>
                <td>{{ $swab->staphy_result }}</td>
                <td>{{ $swab->staphy_before }}</td>
                <td>{{ $swab->staphy_after }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $swab->salmo_para }}</td>
                <td>{{ $swab->salmo_method }}</td>
                <td>{{ $swab->salmo_result }}</td>
                <td>{{ $swab->salmo_before }}</td>
                <td>{{ $swab->salmo_after }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $swab->yeast_mould_para }}</td>
                <td>{{ $swab->yeast_mould_method }}</td>
                <td>{{ $swab->yeast_mould_result }}</td>
                <td>{{ $swab->yeast_mould_before }}</td>
                <td>{{ $swab->yeast_mould_after }}</td>
            </tr>

        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $swab->method != null ? $swab->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">swab Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $swab->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $swab->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $swab->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $swab->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $swab->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/mr_swabs/' . $swab->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $swab->date ? date('d-M-Y', strtotime($swab->date)) : '-' }}</b><br></b></h4>
            <h4><b>{{ $swab->checked_name != null ? $swab->checked_name : '' }}</b></h4>
            <h4><b>{{ $swab->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
