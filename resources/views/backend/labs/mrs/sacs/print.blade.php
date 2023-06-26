@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('sacs.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $sac->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $sac->company_name != null ? $sac->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $sac->address != null ? $sac->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $sac->phone != null ? $sac->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $sac->lab_received_date != null ? date('d-M-Y', strtotime($sac->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $sac->sample_number != null ? $sac->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $sac->product_name != null ? $sac->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $sac->test_performed_date != null ? date('d-M-Y', strtotime($sac->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $sac->test_type != null ? $sac->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $sac->issue_date != null ? date('d-M-Y', strtotime($sac->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $sac->results != null ? $sac->results : '' }}</td>
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
                <td>{{ $sac->apc_para }}</td>
                <td>{{ $sac->apc_method }}</td>
                <td>{{ $sac->apc_result }}</td>
                <td>{{ $sac->apc_before }}</td>
                <td>{{ $sac->apc_after }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $sac->coliform_para }}</td>
                <td>{{ $sac->coliform_method }}</td>
                <td>{{ $sac->coliform_result }}</td>
                <td>{{ $sac->coliform_before }}</td>
                <td>{{ $sac->coliform_after }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $sac->coli_para }}</td>
                <td>{{ $sac->coli_method }}</td>
                <td>{{ $sac->coli_result }}</td>
                <td>{{ $sac->coli_before }}</td>
                <td>{{ $sac->coli_after }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $sac->staphy_para }}</td>
                <td>{{ $sac->staphy_method }}</td>
                <td>{{ $sac->staphy_result }}</td>
                <td>{{ $sac->staphy_before }}</td>
                <td>{{ $sac->staphy_after }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $sac->salmo_para }}</td>
                <td>{{ $sac->salmo_method }}</td>
                <td>{{ $sac->salmo_result }}</td>
                <td>{{ $sac->salmo_before }}</td>
                <td>{{ $sac->salmo_after }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $sac->yeast_mould_para }}</td>
                <td>{{ $sac->yeast_mould_method }}</td>
                <td>{{ $sac->yeast_mould_result }}</td>
                <td>{{ $sac->yeast_mould_before }}</td>
                <td>{{ $sac->yeast_mould_after }}</td>
            </tr>

        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $sac->method != null ? $sac->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">sac Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $sac->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $sac->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $sac->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $sac->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $sac->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/mr_sacs/' . $sac->sign) }}" alt="" style="width:100px;">
            {{-- <h4><b>{{ $sac->date ? date('d-M-Y', strtotime($sac->date)) : '-' }}</b><br></b></h4> --}}
            <h4><b>{{ $sac->checked_name != null ? $sac->checked_name : '' }}</b></h4>
            <h4><b>{{ $sac->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
