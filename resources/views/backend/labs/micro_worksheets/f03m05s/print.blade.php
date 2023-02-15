@extends('backend.labs.main_print')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end print-btn">
                        <a href="{{ route('f03m05.index') }}">
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

    <div class="flex-container" style="margin-bottom:10px;margin-top: -20px;">
        <div style="flex-grow: 5">

        </div>
        <div class="analysis" style="flex-grow: 15">
            WORKSHEET FOR SALMONELLA
        </div>
        <div class="gc-form" style="flex-grow: 1">FIDSL-03-M-05</div>
    </div>

    <div class="flex-box" style="margin-top: -30px;">
        <table class="table table-stripped">
            <tr>
                <td>Job Number</td>
                <td>: {{ $f03m05->job_number != null ? $f03m05->job_number : '' }}</td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>: {{ $f03m05->product_name != null ? $f03m05->product_name : '' }}</td>
            </tr>
            <tr>
                <td>Date Received</td>
                <td>: {{ $f03m05->received_date != null ? date('d-M-Y', strtotime($f03m05->received_date)) : '' }}</td>
            </tr>
            <tr>
                <td>Date Initiated for Analysis</td>
                <td>: {{ $f03m05->analysed_date != null ? date('d-M-Y', strtotime($f03m05->analysed_date)) : '' }}</td>
            </tr>
            <tr>
                <td>Date Reported</td>
                <td>: {{ $f03m05->reported_date != null ? date('d-M-Y', strtotime($f03m05->reported_date)) : '' }}</td>
            </tr>
            <tr>
                <td>Method</td>
                <td>: {{ $f03m05->method != null ? $f03m05->method : '' }}</td>
            </tr>

        </table>
    </div>


    <table class="gc-table table table-bordered">
        <tbody>
            <tr>
                <td colspan="2" style="text-align: center;">Analytical Unit</td>
                <td colspan="9" style="text-align: center;">{{ $f03m05->unit != null ? $f03m05->unit : '' }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">Pre enrichment</td>
                <td colspan="9" style="text-align: center;">
                    {{ $f03m05->pre_enrichment != null ? $f03m05->pre_enrichment : '' }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">Selective enrichment</td>
                <td colspan="9" style="text-align: center;">
                    {{ $f03m05->selective_enrichment != null ? $f03m05->selective_enrichment : '' }}</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><b>Selective Agar</b></td>
                <td colspan="5" style="text-align: center;"><b>TSI</b></td>
                <td colspan="4" style="text-align: center;"><b>LI</b></td>
            </tr>

            <tr>
                <td colspan="2"></td>
                <td style="text-align: center;">Slant</td>
                <td></td>
                <td style="text-align: center;">Butt</td>
                <td style="text-align: center;">H2S</td>
                <td style="text-align: center;">Gas</td>
                <td style="text-align: center;">Slant</td>
                <td style="text-align: center;">Butt</td>
                <td style="text-align: center;">H2S</td>
                <td style="text-align: center;">Gas</td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center;">XLD</td>
                <td style="text-align: center;">{{ $f03m05->xld1_slant_tsi != null ? $f03m05->xld1_slant_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld1_blank_tsi != null ? $f03m05->xld1_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld1_butt_tsi != null ? $f03m05->xld1_butt_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld1_h2s_tsi != null ? $f03m05->xld1_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld1_gas_tsi != null ? $f03m05->xld1_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld1_slant_li != null ? $f03m05->xld1_slant_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld1_butt_li != null ? $f03m05->xld1_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld1_h2s_li != null ? $f03m05->xld1_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld1_gas_li != null ? $f03m05->xld1_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;" colspan="2">XLD</td>
                <td style="text-align: center;">{{ $f03m05->xld2_slant_tsi != null ? $f03m05->xld2_slant_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld2_blank_tsi != null ? $f03m05->xld2_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld2_butt_tsi != null ? $f03m05->xld2_butt_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld2_h2s_tsi != null ? $f03m05->xld2_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld2_gas_tsi != null ? $f03m05->xld2_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld2_slant_li != null ? $f03m05->xld2_slant_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld2_butt_li != null ? $f03m05->xld2_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld2_h2s_li != null ? $f03m05->xld2_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->xld2_gas_li != null ? $f03m05->xld2_gas_li : '' }}</td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center;">HE</td>
                <td style="text-align: center;">{{ $f03m05->he1_slant_tsi != null ? $f03m05->he1_slant_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he1_blank_tsi != null ? $f03m05->he1_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he1_butt_tsi != null ? $f03m05->he1_butt_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he1_h2s_tsi != null ? $f03m05->he1_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he1_gas_tsi != null ? $f03m05->he1_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he1_slant_li != null ? $f03m05->he1_slant_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he1_butt_li != null ? $f03m05->he1_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he1_h2s_li != null ? $f03m05->he1_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he1_gas_li != null ? $f03m05->he1_gas_li : '' }}</td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center;">HE</td>
                <td style="text-align: center;">{{ $f03m05->he2_slant_tsi != null ? $f03m05->he2_slant_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he2_blank_tsi != null ? $f03m05->he2_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he2_butt_tsi != null ? $f03m05->he2_butt_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he2_h2s_tsi != null ? $f03m05->he2_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he2_gas_tsi != null ? $f03m05->he2_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he2_slant_li != null ? $f03m05->he2_slant_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he2_butt_li != null ? $f03m05->he2_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he2_h2s_li != null ? $f03m05->he2_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->he2_gas_li != null ? $f03m05->he2_gas_li : '' }}</td>
            </tr>

            <tr>
                <td rowspan="10" style="text-align: center;"><b>B<br>I<br>O<br>C<br>H<br>E<br>M<br>I<br>C<br>A<br>L<br>
                        T<br>E<br>S<br>T<br></b>
                </td>
                <td style="text-align: center;">Lysine broth</td>
                <td style="text-align: center;">{{ $f03m05->lysine_slant_tsi != null ? $f03m05->lysine_slant_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->lysine_blank_tsi != null ? $f03m05->lysine_blank_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->lysine_butt_tsi != null ? $f03m05->lysine_butt_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->lysine_h2s_tsi != null ? $f03m05->lysine_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->lysine_gas_tsi != null ? $f03m05->lysine_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->lysine_slant_li != null ? $f03m05->lysine_slant_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->lysine_butt_li != null ? $f03m05->lysine_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->lysine_h2s_li != null ? $f03m05->lysine_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->lysine_gas_li != null ? $f03m05->lysine_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">Urease</td>
                <td style="text-align: center;">{{ $f03m05->urease_slant_tsi != null ? $f03m05->urease_slant_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->urease_blank_tsi != null ? $f03m05->urease_blank_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->urease_butt_tsi != null ? $f03m05->urease_butt_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->urease_h2s_tsi != null ? $f03m05->urease_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->urease_gas_tsi != null ? $f03m05->urease_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->urease_slant_li != null ? $f03m05->urease_slant_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->urease_butt_li != null ? $f03m05->urease_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->urease_h2s_li != null ? $f03m05->urease_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->urease_gas_li != null ? $f03m05->urease_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">Dulcitol</td>
                <td style="text-align: center;">{{ $f03m05->dul_slant_tsi != null ? $f03m05->dul_slant_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->dul_blank_tsi != null ? $f03m05->dul_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->dul_butt_tsi != null ? $f03m05->dul_butt_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->dul_h2s_tsi != null ? $f03m05->dul_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->dul_gas_tsi != null ? $f03m05->dul_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->dul_slant_li != null ? $f03m05->dul_slant_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->dul_butt_li != null ? $f03m05->dul_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->dul_h2s_li != null ? $f03m05->dul_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->dul_gas_li != null ? $f03m05->dul_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">KcN</td>
                <td style="text-align: center;">{{ $f03m05->kcn_slant_tsi != null ? $f03m05->kcn_slant_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->kcn_blank_tsi != null ? $f03m05->kcn_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->kcn_butt_tsi != null ? $f03m05->kcn_butt_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->kcn_h2s_tsi != null ? $f03m05->kcn_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->kcn_gas_tsi != null ? $f03m05->kcn_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->kcn_slant_li != null ? $f03m05->kcn_slant_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->kcn_butt_li != null ? $f03m05->kcn_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->kcn_h2s_li != null ? $f03m05->kcn_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->kcn_gas_li != null ? $f03m05->kcn_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">Malonate</td>
                <td style="text-align: center;">
                    {{ $f03m05->malonate_slant_tsi != null ? $f03m05->malonate_slant_tsi : '' }}</td>
                <td style="text-align: center;">
                    {{ $f03m05->malonate_blank_tsi != null ? $f03m05->malonate_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->malonate_butt_tsi != null ? $f03m05->malonate_butt_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->malonate_h2s_tsi != null ? $f03m05->malonate_h2s_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->malonate_gas_tsi != null ? $f03m05->malonate_gas_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->malonate_slant_li != null ? $f03m05->malonate_slant_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->malonate_butt_li != null ? $f03m05->malonate_butt_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->malonate_h2s_li != null ? $f03m05->malonate_h2s_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->malonate_gas_li != null ? $f03m05->malonate_gas_li : '' }}
                </td>
            </tr>

            <tr>
                <td style="text-align: center;">Indole</td>
                <td style="text-align: center;">{{ $f03m05->indole_slant_tsi != null ? $f03m05->indole_slant_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->indole_blank_tsi != null ? $f03m05->indole_blank_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->indole_butt_tsi != null ? $f03m05->indole_butt_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->indole_h2s_tsi != null ? $f03m05->indole_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->indole_gas_tsi != null ? $f03m05->indole_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->indole_slant_li != null ? $f03m05->indole_slant_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->indole_butt_li != null ? $f03m05->indole_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->indole_h2s_li != null ? $f03m05->indole_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->indole_gas_li != null ? $f03m05->indole_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">Methyl red</td>
                <td style="text-align: center;">{{ $f03m05->red_slant_tsi != null ? $f03m05->red_slant_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->red_blank_tsi != null ? $f03m05->red_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->red_butt_tsi != null ? $f03m05->red_butt_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->red_h2s_tsi != null ? $f03m05->red_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->red_gas_tsi != null ? $f03m05->red_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->red_slant_li != null ? $f03m05->red_slant_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->red_butt_li != null ? $f03m05->red_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->red_h2s_li != null ? $f03m05->red_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->red_gas_li != null ? $f03m05->red_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">Voges-Proscher</td>
                <td style="text-align: center;">{{ $f03m05->voges_slant_tsi != null ? $f03m05->voges_slant_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->voges_blank_tsi != null ? $f03m05->voges_blank_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->voges_butt_tsi != null ? $f03m05->voges_butt_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->voges_h2s_tsi != null ? $f03m05->voges_h2s_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->voges_gas_tsi != null ? $f03m05->voges_gas_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->voges_slant_li != null ? $f03m05->voges_slant_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->voges_butt_li != null ? $f03m05->voges_butt_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->voges_h2s_li != null ? $f03m05->voges_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->voges_gas_li != null ? $f03m05->voges_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">Citrate</td>
                <td style="text-align: center;">
                    {{ $f03m05->citrate_slant_tsi != null ? $f03m05->citrate_slant_tsi : '' }}</td>
                <td style="text-align: center;">
                    {{ $f03m05->citrate_blank_tsi != null ? $f03m05->citrate_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->citrate_butt_tsi != null ? $f03m05->citrate_butt_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->citrate_h2s_tsi != null ? $f03m05->citrate_h2s_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->citrate_gas_tsi != null ? $f03m05->citrate_gas_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->citrate_slant_li != null ? $f03m05->citrate_slant_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->citrate_butt_li != null ? $f03m05->citrate_butt_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->citrate_h2s_li != null ? $f03m05->citrate_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->citrate_gas_li != null ? $f03m05->citrate_gas_li : '' }}</td>
            </tr>

            <tr>
                <td style="text-align: center;">Sucrose</td>
                <td style="text-align: center;">
                    {{ $f03m05->sucrose_slant_tsi != null ? $f03m05->sucrose_slant_tsi : '' }}</td>
                <td style="text-align: center;">
                    {{ $f03m05->sucrose_blank_tsi != null ? $f03m05->sucrose_blank_tsi : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->sucrose_butt_tsi != null ? $f03m05->sucrose_butt_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->sucrose_h2s_tsi != null ? $f03m05->sucrose_h2s_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->sucrose_gas_tsi != null ? $f03m05->sucrose_gas_tsi : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->sucrose_slant_li != null ? $f03m05->sucrose_slant_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->sucrose_butt_li != null ? $f03m05->sucrose_butt_li : '' }}
                </td>
                <td style="text-align: center;">{{ $f03m05->sucrose_h2s_li != null ? $f03m05->sucrose_h2s_li : '' }}</td>
                <td style="text-align: center;">{{ $f03m05->sucrose_gas_li != null ? $f03m05->sucrose_gas_li : '' }}</td>
            </tr>
        </tbody>
    </table>

    <div class="flex-box" style="margin-top: -40px;">
        <div>
            <h4>Salmonella</h4>
        </div>
        <div>
            <h4>: {{ $f03m05->sal }}</b></h4>
        </div>
    </div>


    <div class="flex-container" style="margin-top: -40px;">
        <div style="flex-grow: 2">

            <h4>Analysed by </h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            <h4>: <b>{{ $f03m05->analysed_name != null ? $f03m05->analysed_name : '' }}</b></h4>

            : @if ($f03m05->analysed_sign != null)
                <img src="{{ asset('photos/mw_f03m05s/analysed_sign/' . $f03m05->analysed_sign) }}" alt=""
                    style="width:100px;height:44px;">
            @else
                <span>____</span>
            @endif
            <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f03m05->analysed_date)) }}</b></h5>

        </div>

        <div style="flex-grow: 2">

            <h4>Checked by </h4>
            <h4 style="height: 44px;">Sign and date</h4>
        </div>

        <div style="flex-grow: 2;margin-top:10px;">

            <h4>: <b>{{ $f03m05->checked_name != null ? $f03m05->checked_name : '' }}</b></h4>

            : @if ($f03m05->checked_sign != null)
                <img src="{{ asset('photos/mw_f03m05s/checked_sign/' . $f03m05->checked_sign) }}" alt=""
                    style="width:100px;height:44px;">
            @else
                <span>____</span>
            @endif
            <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f03m05->checked_date)) }}</b></h5>

        </div>
    </div>
@endsection
