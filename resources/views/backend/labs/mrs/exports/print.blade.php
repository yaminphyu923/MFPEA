@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('exports.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $export->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $export->company_name != null ? $export->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $export->address != null ? $export->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $export->phone != null ? $export->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $export->lab_received_date != null ? date('d-M-Y', strtotime($export->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $export->sample_number != null ? $export->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $export->product_name != null ? $export->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $export->test_performed_date != null ? date('d-M-Y', strtotime($export->test_performed_date)) : '' }}
                </td>
            </tr>
            <tr>
                <td>8.Quantity</td>
                <td>: {{ $export->quantity != null ? $export->quantity : '' }}</td>
            </tr>
            <tr>
                <td>9.Packing</td>
                <td>: {{ $export->packing != null ? $export->packing : '' }}</td>
            </tr>
            <tr>
                <td>10.Port of Loading</td>
                <td>: {{ $export->loading != null ? $export->loading : '' }}</td>
            </tr>
            <tr>
                <td>11.Port of Discharge</td>
                <td>: {{ $export->discharge != null ? $export->discharge : '' }}</td>
            </tr>
            <tr>
                <td>12.Vessle Name</td>
                <td>: {{ $export->vessle_name != null ? $export->vessle_name : '' }}</td>
            </tr>
            <tr>
                <td>13.PO Number</td>
                <td>: {{ $export->po_number != null ? $export->po_number : '' }}</td>
            </tr>
            <tr>
                <td>14.EORI Number</td>
                <td>: {{ $export->eori_number != null ? $export->eori_number : '' }}</td>
            </tr>

            <tr>
                <td>15.REX No.</td>
                <td>: {{ $export->rex_no != null ? $export->rex_no : '' }}</td>
            </tr>

            <tr>
                <td>16.HS Code</td>
                <td>: {{ $export->hs_code != null ? $export->hs_code : '' }}</td>
            </tr>

            <tr>
                <td>17.Type of Test</td>
                <td>: {{ $export->test_type != null ? $export->test_type : '' }}</td>
            </tr>

            <tr>
                <td>18.Issue Date</td>
                <td>: {{ $export->issue_date != null ? date('d-M-Y', strtotime($export->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>19.Results</td>
                <td>: {{ $export->results != null ? $export->results : '' }}</td>
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
                <th>Reference Range</th>
                <th>Reference Standard</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>{{ $export->apc_para }}</td>
                <td>{{ $export->apc_method }}</td>
                <td>{{ $export->apc_result }}</td>
                <td>{{ $export->apc_before }}</td>
                <td>{{ $export->apc_after }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $export->coliform_para }}</td>
                <td>{{ $export->coliform_method }}</td>
                <td>{{ $export->coliform_result }}</td>
                <td>{{ $export->coliform_before }}</td>
                <td>{{ $export->coliform_after }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $export->coli_para }}</td>
                <td>{{ $export->coli_method }}</td>
                <td>{{ $export->coli_result }}</td>
                <td>{{ $export->coli_before }}</td>
                <td>{{ $export->coli_after }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $export->staphy_para }}</td>
                <td>{{ $export->staphy_method }}</td>
                <td>{{ $export->staphy_result }}</td>
                <td>{{ $export->staphy_before }}</td>
                <td>{{ $export->staphy_after }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $export->salmo_para }}</td>
                <td>{{ $export->salmo_method }}</td>
                <td>{{ $export->salmo_result }}</td>
                <td>{{ $export->salmo_before }}</td>
                <td>{{ $export->salmo_after }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $export->yeast_mould_para }}</td>
                <td>{{ $export->yeast_mould_method }}</td>
                <td>{{ $export->yeast_mould_result }}</td>
                <td>{{ $export->yeast_mould_before }}</td>
                <td>{{ $export->yeast_mould_after }}</td>
            </tr>

        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $export->method != null ? $export->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">export Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $export->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $export->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $export->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $export->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $export->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/mr_exports/' . $export->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $export->date ? date('d-M-Y', strtotime($export->date)) : '-' }}</b><br></b></h4>
            <h4><b>{{ $export->checked_name != null ? $export->checked_name : '' }}</b></h4>
            <h4><b>{{ $export->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
