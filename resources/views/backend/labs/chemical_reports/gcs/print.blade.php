@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('gcs.index') }}">
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
        <div class="gc-form" style="flex-grow: 1">{{ $gc->title }}</div>
    </div>

    <div class="flex-box">
        <table class="table table-stripped">
            <tr>
                <td style="width:300px;">1.Company Name</td>
                <td>: {{ $gc->company_name != null ? $gc->company_name : '' }}</td>
            </tr>
            <tr>
                <td>2.Address</td>
                <td>: {{ $gc->address != null ? $gc->address : '' }}</td>
            </tr>
            <tr>
                <td>3.Phone</td>
                <td>: {{ $gc->phone != null ? $gc->phone : '' }}</td>
            </tr>
            <tr>
                <td>4.Lab Received Date</td>
                <td>:
                    {{ $gc->lab_received_date != null ? date('d-M-Y', strtotime($gc->lab_received_date)) : '-' }}
                </td>
            </tr>
            <tr>
                <td>5.Sample Number</td>
                <td>: {{ $gc->sample_number != null ? $gc->sample_number : '-' }}</td>
            </tr>
            <tr>
                <td>6.Product Name</td>
                <td>: {{ $gc->product_name != null ? $gc->product_name : '' }}</td>
            </tr>
            <tr>
                <td>7.Test Performed Date</td>
                <td>:
                    {{ $gc->test_performed_date != null ? date('d-M-Y', strtotime($gc->test_performed_date)) : '' }}
                </td>
            </tr>

            <tr>
                <td>8.Test Type</td>
                <td>: {{ $gc->test_type != null ? $gc->test_type : '' }}</td>
            </tr>
            <tr>
                <td>9.Issue Date</td>
                <td>: {{ $gc->issue_date != null ? date('d-M-Y', strtotime($gc->issue_date)) : '' }}</td>
            </tr>
            <tr>
                <td>10.Results</td>
                <td>: {{ $gc->results != null ? $gc->results : '' }}</td>
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
                <td>1.</td>
                <td>{{ $gc->lauric_12_0_para }}</td>
                <td rowspan="17" class="text-center">{{ $gc->lauric_12_0_method }}</td>
                <td>{{ $gc->lauric_12_0_result }}</td>
            </tr>

            <tr>
                <td>2.</td>
                <td>{{ $gc->myristic_14_0_para }}</td>
                <td>{{ $gc->myristic_14_0_result }}</td>
            </tr>

            <tr>
                <td>3.</td>
                <td>{{ $gc->myristoleic_14_1_para }}</td>
                <td>{{ $gc->myristoleic_14_1_result }}</td>
            </tr>

            <tr>
                <td>4.</td>
                <td>{{ $gc->palmitic_16_0_para }}</td>
                <td>{{ $gc->palmitic_16_0_result }}</td>
            </tr>

            <tr>
                <td>5.</td>
                <td>{{ $gc->palmitoleic_16_1_para }}</td>
                <td>{{ $gc->palmitoleic_16_1_result }}</td>
            </tr>

            <tr>
                <td>6.</td>
                <td>{{ $gc->stearic_18_0_para }}</td>
                <td>{{ $gc->stearic_18_0_result }}</td>
            </tr>

            <tr>
                <td>7.</td>
                <td>{{ $gc->oleictrans_18_1_para }}</td>
                <td>{{ $gc->oleictrans_18_1_result }}</td>
            </tr>

            <tr>
                <td>8.</td>
                <td>{{ $gc->oleic_18_1_para }}</td>
                <td>{{ $gc->oleic_18_1_result }}</td>
            </tr>

            <tr>
                <td>9.</td>
                <td>{{ $gc->linoleictrans_18_2_para }}</td>
                <td>{{ $gc->linoleictrans_18_2_result }}</td>
            </tr>

            <tr>
                <td>10.</td>
                <td>{{ $gc->linoleic_18_2_para }}</td>
                <td>{{ $gc->linoleic_18_2_result }}</td>
            </tr>

            <tr>
                <td>11.</td>
                <td>{{ $gc->linoleic_18_3_para }}</td>
                <td>{{ $gc->linoleic_18_3_result }}</td>
            </tr>

            <tr>
                <td>12.</td>
                <td>{{ $gc->arachidic_20_0_para }}</td>
                <td>{{ $gc->arachidic_20_0_result }}</td>
            </tr>

            <tr>
                <td>13.</td>
                <td>{{ $gc->paullinic_20_1_para }}</td>
                <td>{{ $gc->paullinic_20_1_result }}</td>
            </tr>

            <tr>
                <td>14.</td>
                <td>{{ $gc->arachidonic_20_4_para }}</td>
                <td>{{ $gc->arachidonic_20_4_result }}</td>
            </tr>

            <tr>
                <td>15.</td>
                <td>{{ $gc->bchenic_22_0_para }}</td>
                <td>{{ $gc->bchenic_22_0_result }}</td>
            </tr>

            <tr>
                <td>16.</td>
                <td>{{ $gc->erucic_22_1_para }}</td>
                <td>{{ $gc->erucic_22_1_result }}</td>
            </tr>

            <tr>
                <td>17.</td>
                <td>{{ $gc->lignoceric_24_0_para }}</td>
                <td>{{ $gc->lignoceric_24_0_result }}</td>
            </tr>
        </tbody>
    </table>

    <div class="flex-box">
        <div>
            <h4>Method</h4>
        </div>
        <div>
            <h4>: <b>{{ $gc->method != null ? $gc->method : '' }}</b></h4>
        </div>


    </div>

    <div class="flex-container">
        <div style="flex-grow: 7">
            {{-- <div class="card text-center" style="width:200px;border:1px solid #333;text-align:center;">
                <div class="card-header" style="border:1px solid #333;">
                    <p style="margin:0;">gc Facts</p>
                    <p style="margin:0;">1 package (100g)</p>
                </div>
                <div class="card-body" style="border:1px solid #333;">
                    <p style="margin:0;">Energy - {{ $gc->energy_result }} kcal</p>
                    <p style="margin:0;">Protein - {{ $gc->protein_result }} g</p>
                    <p style="margin:0;">Fat - {{ $gc->fat_result }} g</p>
                    <p style="margin:0;">Carbohydrate - {{ $gc->carbo_result }} g</p>
                    <p style="margin:0;">Sodium (Na) - {{ $gc->sodium_result }} g</p>
                </div>
            </div> --}}
        </div>

        <div class="sign" style="flex-grow: 6">
            <img src="{{ asset('photos/cr_gcs/' . $gc->sign) }}" alt="" style="width:100px;">
            <h4><b>{{ $gc->date ? date('d-M-Y', strtotime($gc->date)) : '-' }}</b><br></b></h4>
            <h4><b>{{ $gc->checked_name != null ? $gc->checked_name : '' }}</b></h4>
            <h4><b>{{ $gc->position }}</b></h4>
        </div>

    </div>

    <h5 style="text-align: center;">
        (This laboratory anlysis report shall not be reproduced except in full, without the written approval of the
        laboratory.)
    </h5>
@endsection
