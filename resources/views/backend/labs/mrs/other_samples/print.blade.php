@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('other_samples.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $other_sample->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $other_sample->company_name != null ? $other_sample->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $other_sample->address != null ? $other_sample->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $other_sample->phone != null ? $other_sample->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $other_sample->lab_received_date != null ? date('d-M-Y', strtotime($other_sample->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $other_sample->sample_number != null ? $other_sample->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $other_sample->product_name != null ? $other_sample->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $other_sample->test_performed_date != null ? date('d-M-Y', strtotime($other_sample->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $other_sample->test_type != null ? $other_sample->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $other_sample->issue_date != null ? date('d-M-Y', strtotime($other_sample->issue_date)) : '' }}
                </td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $other_sample->results != null ? $other_sample->results : '' }}</td>
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
                <td>{{ $other_sample->apc_para }}</td>
                <td>{{ $other_sample->apc_method }}</td>
                <td>{{ $other_sample->apc_result }}</td>
                <td>{{ $other_sample->apc_before }}</td>
                <td>{{ $other_sample->apc_after }}</td>
            </tr>

            <tr>
                <td>2</td>
                <td>{{ $other_sample->coliform_para }}</td>
                <td>{{ $other_sample->coliform_method }}</td>
                <td>{{ $other_sample->coliform_result }}</td>
                <td>{{ $other_sample->coliform_before }}</td>
                <td>{{ $other_sample->coliform_after }}</td>
            </tr>

            <tr>
                <td>3</td>
                <td>{{ $other_sample->coli_para }}</td>
                <td>{{ $other_sample->coli_method }}</td>
                <td>{{ $other_sample->coli_result }}</td>
                <td>{{ $other_sample->coli_before }}</td>
                <td>{{ $other_sample->coli_after }}</td>
            </tr>

            <tr>
                <td>4</td>
                <td>{{ $other_sample->staphy_para }}</td>
                <td>{{ $other_sample->staphy_method }}</td>
                <td>{{ $other_sample->staphy_result }}</td>
                <td>{{ $other_sample->staphy_before }}</td>
                <td>{{ $other_sample->staphy_after }}</td>
            </tr>

            <tr>
                <td>5</td>
                <td>{{ $other_sample->salmo_para }}</td>
                <td>{{ $other_sample->salmo_method }}</td>
                <td>{{ $other_sample->salmo_result }}</td>
                <td>{{ $other_sample->salmo_before }}</td>
                <td>{{ $other_sample->salmo_after }}</td>
            </tr>

            <tr>
                <td>6</td>
                <td>{{ $other_sample->yeast_mould_para }}</td>
                <td>{{ $other_sample->yeast_mould_method }}</td>
                <td>{{ $other_sample->yeast_mould_result }}</td>
                <td>{{ $other_sample->yeast_mould_before }}</td>
                <td>{{ $other_sample->yeast_mould_after }}</td>
            </tr>

        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $other_sample->method != null ? $other_sample->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">other_sample Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $other_sample->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $other_sample->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $other_sample->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $other_sample->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $other_sample->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/mr_other_samples/' . $other_sample->sign) }}" alt="" style="width:100px;">
            {{-- <h4><b>{{ $other_sample->date ? date('d-M-Y', strtotime($other_sample->date)) : '-' }}</b><br></b></h4> --}}
            <h4><b>{{ $other_sample->checked_name != null ? $other_sample->checked_name : '' }}</b></h4>
            <h4><b>{{ $other_sample->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
