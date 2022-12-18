@extends('backend.main')

@section('lab-active', 'active')

@section('f03m05-active', 'active')

@section('content')
    @include('backend.labs.lab_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('f03m05.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 my-3">
                <h4 class="text-center"><b>Food Industries Development Supporting Laboratory- FIDSL</b></h4>
            </div>

            <div class="col-sm-12">
                <h5 class="text-center"><b>WORKSHEET FOR SALMONELLA</b></h5>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <p class="border text-center p-2"><b>FIDSL-03-M-05</b></p>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-borderless table-stripped">
                        <tr>
                            <td style="width:300px;">Job Number</td>
                            <td>: {{ $f03m05->job_number != null ? $f03m05->job_number : '' }}</td>

                            <td style="width:300px;">Product Name</td>
                            <td>: {{ $f03m05->product_name != null ? $f03m05->product_name : '' }}</td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Received</td>
                            <td>:
                                {{ $f03m05->received_date != null ? date('d-M-Y', strtotime($f03m05->received_date)) : '' }}
                            </td>

                            <td style="width:300px;">Date Initiated for Analysis</td>
                            <td>:
                                {{ $f03m05->analysed_date != null ? date('d-M-Y', strtotime($f03m05->analysed_date)) : '' }}
                            </td>
                        </tr>

                        <tr>
                            <td style="width:300px;">Date Reported</td>
                            <td>:
                                {{ $f03m05->reported_date != null ? date('d-M-Y', strtotime($f03m05->reported_date)) : '' }}
                            </td>

                            <td style="width:300px;">Method</td>
                            <td>: {{ $f03m05->method != null ? $f03m05->method : '' }}</td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody class="text-center">
                        <tr>
                            <td colspan="2">Analytical Unit</td>
                            <td colspan="9">{{ $f03m05->unit != null ? $f03m05->unit : '' }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Pre enrichment</td>
                            <td colspan="9">{{ $f03m05->pre_enrichment != null ? $f03m05->pre_enrichment : '' }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Selective enrichment</td>
                            <td colspan="9">
                                {{ $f03m05->selective_enrichment != null ? $f03m05->selective_enrichment : '' }}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Selective Agar</b></td>
                            <td colspan="5" style="text-align: center;"><b>TSI</b></td>
                            <td colspan="4" style="text-align: center;"><b>LI</b></td>
                        </tr>

                        <tr>
                            <td colspan="2"></td>
                            <td>Slant</td>
                            <td></td>
                            <td>Butt</td>
                            <td>H2S</td>
                            <td>Gas</td>
                            <td>Slant</td>
                            <td>Butt</td>
                            <td>H2S</td>
                            <td>Gas</td>
                        </tr>

                        <tr>
                            <td colspan="2">XLD</td>
                            <td>{{ $f03m05->xld1_slant_tsi != null ? $f03m05->xld1_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->xld1_blank_tsi != null ? $f03m05->xld1_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->xld1_butt_tsi != null ? $f03m05->xld1_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->xld1_h2s_tsi != null ? $f03m05->xld1_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->xld1_gas_tsi != null ? $f03m05->xld1_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->xld1_slant_li != null ? $f03m05->xld1_slant_li : '' }}</td>
                            <td>{{ $f03m05->xld1_butt_li != null ? $f03m05->xld1_butt_li : '' }}</td>
                            <td>{{ $f03m05->xld1_h2s_li != null ? $f03m05->xld1_h2s_li : '' }}</td>
                            <td>{{ $f03m05->xld1_gas_li != null ? $f03m05->xld1_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td colspan="2">XLD</td>
                            <td>{{ $f03m05->xld2_slant_tsi != null ? $f03m05->xld2_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->xld2_blank_tsi != null ? $f03m05->xld2_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->xld2_butt_tsi != null ? $f03m05->xld2_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->xld2_h2s_tsi != null ? $f03m05->xld2_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->xld2_gas_tsi != null ? $f03m05->xld2_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->xld2_slant_li != null ? $f03m05->xld2_slant_li : '' }}</td>
                            <td>{{ $f03m05->xld2_butt_li != null ? $f03m05->xld2_butt_li : '' }}</td>
                            <td>{{ $f03m05->xld2_h2s_li != null ? $f03m05->xld2_h2s_li : '' }}</td>
                            <td>{{ $f03m05->xld2_gas_li != null ? $f03m05->xld2_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td colspan="2">HE</td>
                            <td>{{ $f03m05->he1_slant_tsi != null ? $f03m05->he1_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->he1_blank_tsi != null ? $f03m05->he1_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->he1_butt_tsi != null ? $f03m05->he1_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->he1_h2s_tsi != null ? $f03m05->he1_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->he1_gas_tsi != null ? $f03m05->he1_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->he1_slant_li != null ? $f03m05->he1_slant_li : '' }}</td>
                            <td>{{ $f03m05->he1_butt_li != null ? $f03m05->he1_butt_li : '' }}</td>
                            <td>{{ $f03m05->he1_h2s_li != null ? $f03m05->he1_h2s_li : '' }}</td>
                            <td>{{ $f03m05->he1_gas_li != null ? $f03m05->he1_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td colspan="2">HE</td>
                            <td>{{ $f03m05->he2_slant_tsi != null ? $f03m05->he2_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->he2_blank_tsi != null ? $f03m05->he2_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->he2_butt_tsi != null ? $f03m05->he2_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->he2_h2s_tsi != null ? $f03m05->he2_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->he2_gas_tsi != null ? $f03m05->he2_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->he2_slant_li != null ? $f03m05->he2_slant_li : '' }}</td>
                            <td>{{ $f03m05->he2_butt_li != null ? $f03m05->he2_butt_li : '' }}</td>
                            <td>{{ $f03m05->he2_h2s_li != null ? $f03m05->he2_h2s_li : '' }}</td>
                            <td>{{ $f03m05->he2_gas_li != null ? $f03m05->he2_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td rowspan="10" style="text-orientation: upright;writing-mode: vertical-rl;"><b>BIOCHEMICAL
                                    TEST</b>
                            </td>
                            <td>Lysine broth</td>
                            <td>{{ $f03m05->lysine_slant_tsi != null ? $f03m05->lysine_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->lysine_blank_tsi != null ? $f03m05->lysine_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->lysine_butt_tsi != null ? $f03m05->lysine_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->lysine_h2s_tsi != null ? $f03m05->lysine_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->lysine_gas_tsi != null ? $f03m05->lysine_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->lysine_slant_li != null ? $f03m05->lysine_slant_li : '' }}</td>
                            <td>{{ $f03m05->lysine_butt_li != null ? $f03m05->lysine_butt_li : '' }}</td>
                            <td>{{ $f03m05->lysine_h2s_li != null ? $f03m05->lysine_h2s_li : '' }}</td>
                            <td>{{ $f03m05->lysine_gas_li != null ? $f03m05->lysine_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>Urease</td>
                            <td>{{ $f03m05->urease_slant_tsi != null ? $f03m05->urease_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->urease_blank_tsi != null ? $f03m05->urease_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->urease_butt_tsi != null ? $f03m05->urease_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->urease_h2s_tsi != null ? $f03m05->urease_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->urease_gas_tsi != null ? $f03m05->urease_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->urease_slant_li != null ? $f03m05->urease_slant_li : '' }}</td>
                            <td>{{ $f03m05->urease_butt_li != null ? $f03m05->urease_butt_li : '' }}</td>
                            <td>{{ $f03m05->urease_h2s_li != null ? $f03m05->urease_h2s_li : '' }}</td>
                            <td>{{ $f03m05->urease_gas_li != null ? $f03m05->urease_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>Dulcitol</td>
                            <td>{{ $f03m05->dul_slant_tsi != null ? $f03m05->dul_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->dul_blank_tsi != null ? $f03m05->dul_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->dul_butt_tsi != null ? $f03m05->dul_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->dul_h2s_tsi != null ? $f03m05->dul_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->dul_gas_tsi != null ? $f03m05->dul_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->dul_slant_li != null ? $f03m05->dul_slant_li : '' }}</td>
                            <td>{{ $f03m05->dul_butt_li != null ? $f03m05->dul_butt_li : '' }}</td>
                            <td>{{ $f03m05->dul_h2s_li != null ? $f03m05->dul_h2s_li : '' }}</td>
                            <td>{{ $f03m05->dul_gas_li != null ? $f03m05->dul_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>KcN</td>
                            <td>{{ $f03m05->kcn_slant_tsi != null ? $f03m05->kcn_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->kcn_blank_tsi != null ? $f03m05->kcn_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->kcn_butt_tsi != null ? $f03m05->kcn_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->kcn_h2s_tsi != null ? $f03m05->kcn_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->kcn_gas_tsi != null ? $f03m05->kcn_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->kcn_slant_li != null ? $f03m05->kcn_slant_li : '' }}</td>
                            <td>{{ $f03m05->kcn_butt_li != null ? $f03m05->kcn_butt_li : '' }}</td>
                            <td>{{ $f03m05->kcn_h2s_li != null ? $f03m05->kcn_h2s_li : '' }}</td>
                            <td>{{ $f03m05->kcn_gas_li != null ? $f03m05->kcn_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>Malonate</td>
                            <td>{{ $f03m05->malonate_slant_tsi != null ? $f03m05->malonate_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->malonate_blank_tsi != null ? $f03m05->malonate_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->malonate_butt_tsi != null ? $f03m05->malonate_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->malonate_h2s_tsi != null ? $f03m05->malonate_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->malonate_gas_tsi != null ? $f03m05->malonate_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->malonate_slant_li != null ? $f03m05->malonate_slant_li : '' }}</td>
                            <td>{{ $f03m05->malonate_butt_li != null ? $f03m05->malonate_butt_li : '' }}</td>
                            <td>{{ $f03m05->malonate_h2s_li != null ? $f03m05->malonate_h2s_li : '' }}</td>
                            <td>{{ $f03m05->malonate_gas_li != null ? $f03m05->malonate_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>Indole</td>
                            <td>{{ $f03m05->indole_slant_tsi != null ? $f03m05->indole_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->indole_blank_tsi != null ? $f03m05->indole_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->indole_butt_tsi != null ? $f03m05->indole_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->indole_h2s_tsi != null ? $f03m05->indole_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->indole_gas_tsi != null ? $f03m05->indole_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->indole_slant_li != null ? $f03m05->indole_slant_li : '' }}</td>
                            <td>{{ $f03m05->indole_butt_li != null ? $f03m05->indole_butt_li : '' }}</td>
                            <td>{{ $f03m05->indole_h2s_li != null ? $f03m05->indole_h2s_li : '' }}</td>
                            <td>{{ $f03m05->indole_gas_li != null ? $f03m05->indole_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>Methyl red</td>
                            <td>{{ $f03m05->red_slant_tsi != null ? $f03m05->red_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->red_blank_tsi != null ? $f03m05->red_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->red_butt_tsi != null ? $f03m05->red_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->red_h2s_tsi != null ? $f03m05->red_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->red_gas_tsi != null ? $f03m05->red_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->red_slant_li != null ? $f03m05->red_slant_li : '' }}</td>
                            <td>{{ $f03m05->red_butt_li != null ? $f03m05->red_butt_li : '' }}</td>
                            <td>{{ $f03m05->red_h2s_li != null ? $f03m05->red_h2s_li : '' }}</td>
                            <td>{{ $f03m05->red_gas_li != null ? $f03m05->red_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>Voges-Proscher</td>
                            <td>{{ $f03m05->voges_slant_tsi != null ? $f03m05->voges_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->voges_blank_tsi != null ? $f03m05->voges_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->voges_butt_tsi != null ? $f03m05->voges_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->voges_h2s_tsi != null ? $f03m05->voges_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->voges_gas_tsi != null ? $f03m05->voges_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->voges_slant_li != null ? $f03m05->voges_slant_li : '' }}</td>
                            <td>{{ $f03m05->voges_butt_li != null ? $f03m05->voges_butt_li : '' }}</td>
                            <td>{{ $f03m05->voges_h2s_li != null ? $f03m05->voges_h2s_li : '' }}</td>
                            <td>{{ $f03m05->voges_gas_li != null ? $f03m05->voges_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>Citrate</td>
                            <td>{{ $f03m05->citrate_slant_tsi != null ? $f03m05->citrate_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->citrate_blank_tsi != null ? $f03m05->citrate_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->citrate_butt_tsi != null ? $f03m05->citrate_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->citrate_h2s_tsi != null ? $f03m05->citrate_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->citrate_gas_tsi != null ? $f03m05->citrate_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->citrate_slant_li != null ? $f03m05->citrate_slant_li : '' }}</td>
                            <td>{{ $f03m05->citrate_butt_li != null ? $f03m05->citrate_butt_li : '' }}</td>
                            <td>{{ $f03m05->citrate_h2s_li != null ? $f03m05->citrate_h2s_li : '' }}</td>
                            <td>{{ $f03m05->citrate_gas_li != null ? $f03m05->citrate_gas_li : '' }}</td>
                        </tr>

                        <tr>
                            <td>Sucrose</td>
                            <td>{{ $f03m05->sucrose_slant_tsi != null ? $f03m05->sucrose_slant_tsi : '' }}</td>
                            <td>{{ $f03m05->sucrose_blank_tsi != null ? $f03m05->sucrose_blank_tsi : '' }}</td>
                            <td>{{ $f03m05->sucrose_butt_tsi != null ? $f03m05->sucrose_butt_tsi : '' }}</td>
                            <td>{{ $f03m05->sucrose_h2s_tsi != null ? $f03m05->sucrose_h2s_tsi : '' }}</td>
                            <td>{{ $f03m05->sucrose_gas_tsi != null ? $f03m05->sucrose_gas_tsi : '' }}</td>
                            <td>{{ $f03m05->sucrose_slant_li != null ? $f03m05->sucrose_slant_li : '' }}</td>
                            <td>{{ $f03m05->sucrose_butt_li != null ? $f03m05->sucrose_butt_li : '' }}</td>
                            <td>{{ $f03m05->sucrose_h2s_li != null ? $f03m05->sucrose_h2s_li : '' }}</td>
                            <td>{{ $f03m05->sucrose_gas_li != null ? $f03m05->sucrose_gas_li : '' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 mt-3">
                <span>Salmonella : {{ $f03m05->sal }}</span>
            </div>
            <div class="col-sm-6 my-3">
                <span>Analysed by : <b>{{ $f03m05->analysed_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">
                <span>Check by : <b>{{ $f03m05->checked_name }}</b></span>
            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($f03m05->analysed_sign != null)
                        <img src="{{ asset('photos/mw_f03m05s/analysed_sign/' . $f03m05->analysed_sign) }}" alt=""
                            style="width:100px;">

                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f03m05->analysed_date)) }}</b></h5>
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>

            <div class="col-sm-6 my-3">

                <span>Sign and date:
                    @if ($f03m05->checked_sign != null)
                        <img src="{{ asset('photos/mw_f03m05s/checked_sign/' . $f03m05->checked_sign) }}" alt=""
                            style="width:100px;">
                        <h5 class="offset-sm-2"><b>{{ date('d-M-Y', strtotime($f03m05->checked_date)) }}</b></h5>
                    @else
                        <span>____</span>
                    @endif
                </span>

            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection
