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
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>

                        {{-- <a href="{{ route('hmm-method.index') }}">
                            <button type="button" class="btn btn-md btn-primary mr-1"><i class="fas fa-clipboard-list"></i>
                                <b>Method</b></button>
                        </a> --}}

                        {{-- <a href="{{ route('hmm-test.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-clipboard-list"></i>
                                <b>Test Parameter</b></button>
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Edit FIDSL-03-M-05</b></h4>
                    </div>

                    <form action="{{ route('f03m05.update', $f03m05->id) }}" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Job Number</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="job_number" class="form-control"
                                                value="{{ $f03m05->job_number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Product Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="product_name" class="form-control"
                                                value="{{ $f03m05->product_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Received Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="received_date" class="form-control"
                                                value="{{ $f03m05->received_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Initiated for Analysis</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysed_date" class="form-control"
                                                value="{{ $f03m05->analysed_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date Reported</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="reported_date" class="form-control"
                                                value="{{ $f03m05->reported_date }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Method</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="method" class="form-control"
                                                value="{{ $f03m05->method }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analytical Unit</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="unit" class="form-control"
                                                value="{{ $f03m05->unit }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Pre enrichment</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="pre_enrichment" class="form-control"
                                                value="{{ $f03m05->pre_enrichment }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Selective enrichment</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="selective_enrichment" class="form-control"
                                                value="{{ $f03m05->selective_enrichment }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_slant_tsi" class="form-control"
                                                value="{{ $f03m05->xld1_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_blank_tsi" class="form-control"
                                                value="{{ $f03m05->xld1_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_butt_tsi" class="form-control"
                                                value="{{ $f03m05->xld1_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->xld1_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_gas_tsi" class="form-control"
                                                value="{{ $f03m05->xld1_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_slant_li" class="form-control"
                                                value="{{ $f03m05->xld1_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_butt_li" class="form-control"
                                                value="{{ $f03m05->xld1_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_h2s_li" class="form-control"
                                                value="{{ $f03m05->xld1_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld1_gas_li" class="form-control"
                                                value="{{ $f03m05->xld1_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_slant_tsi" class="form-control"
                                                value="{{ $f03m05->xld2_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_blank_tsi" class="form-control"
                                                value="{{ $f03m05->xld2_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_butt_tsi" class="form-control"
                                                value="{{ $f03m05->xld2_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->xld2_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_gas_tsi" class="form-control"
                                                value="{{ $f03m05->xld2_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_slant_li" class="form-control"
                                                value="{{ $f03m05->xld2_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_butt_li" class="form-control"
                                                value="{{ $f03m05->xld2_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_h2s_li" class="form-control"
                                                value="{{ $f03m05->xld2_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">XLD (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="xld2_gas_li" class="form-control"
                                                value="{{ $f03m05->xld2_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_slant_tsi" class="form-control"
                                                value="{{ $f03m05->he1_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_blank_tsi" class="form-control"
                                                value="{{ $f03m05->he1_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_butt_tsi" class="form-control"
                                                value="{{ $f03m05->he1_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->he1_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_gas_tsi" class="form-control"
                                                value="{{ $f03m05->he1_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_slant_li" class="form-control"
                                                value="{{ $f03m05->he1_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_butt_li" class="form-control"
                                                value="{{ $f03m05->he1_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_h2s_li" class="form-control"
                                                value="{{ $f03m05->he1_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he1_gas_li" class="form-control"
                                                value="{{ $f03m05->he1_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_slant_tsi" class="form-control"
                                                value="{{ $f03m05->he2_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_blank_tsi" class="form-control"
                                                value="{{ $f03m05->he2_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_butt_tsi" class="form-control"
                                                value="{{ $f03m05->he2_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->he2_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_gas_tsi" class="form-control"
                                                value="{{ $f03m05->he2_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_slant_li" class="form-control"
                                                value="{{ $f03m05->he2_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_butt_li" class="form-control"
                                                value="{{ $f03m05->he2_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_h2s_li" class="form-control"
                                                value="{{ $f03m05->he2_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">HE (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="he2_gas_li" class="form-control"
                                                value="{{ $f03m05->he2_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_slant_tsi" class="form-control"
                                                value="{{ $f03m05->lysine_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_blank_tsi" class="form-control"
                                                value="{{ $f03m05->lysine_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_butt_tsi" class="form-control"
                                                value="{{ $f03m05->lysine_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->lysine_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_gas_tsi" class="form-control"
                                                value="{{ $f03m05->lysine_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_slant_li" class="form-control"
                                                value="{{ $f03m05->lysine_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_butt_li" class="form-control"
                                                value="{{ $f03m05->lysine_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_h2s_li" class="form-control"
                                                value="{{ $f03m05->lysine_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Lysine broth (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="lysine_gas_li" class="form-control"
                                                value="{{ $f03m05->lysine_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_slant_tsi" class="form-control"
                                                value="{{ $f03m05->urease_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_blank_tsi" class="form-control"
                                                value="{{ $f03m05->urease_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_butt_tsi" class="form-control"
                                                value="{{ $f03m05->urease_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->urease_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_gas_tsi" class="form-control"
                                                value="{{ $f03m05->urease_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_slant_li" class="form-control"
                                                value="{{ $f03m05->urease_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_butt_li" class="form-control"
                                                value="{{ $f03m05->urease_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_h2s_li" class="form-control"
                                                value="{{ $f03m05->urease_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Urease (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="urease_gas_li" class="form-control"
                                                value="{{ $f03m05->urease_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_slant_tsi" class="form-control"
                                                value="{{ $f03m05->dul_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_blank_tsi" class="form-control"
                                                value="{{ $f03m05->dul_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_butt_tsi" class="form-control"
                                                value="{{ $f03m05->dul_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->dul_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_gas_tsi" class="form-control"
                                                value="{{ $f03m05->dul_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_slant_li" class="form-control"
                                                value="{{ $f03m05->dul_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_butt_li" class="form-control"
                                                value="{{ $f03m05->dul_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_h2s_li" class="form-control"
                                                value="{{ $f03m05->dul_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Dulcitol (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="dul_gas_li" class="form-control"
                                                value="{{ $f03m05->dul_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_slant_tsi" class="form-control"
                                                value="{{ $f03m05->kcn_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_blank_tsi" class="form-control"
                                                value="{{ $f03m05->kcn_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_butt_tsi" class="form-control"
                                                value="{{ $f03m05->kcn_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->kcn_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_gas_tsi" class="form-control"
                                                value="{{ $f03m05->kcn_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_slant_li" class="form-control"
                                                value="{{ $f03m05->kcn_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_butt_li" class="form-control"
                                                value="{{ $f03m05->kcn_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_h2s_li" class="form-control"
                                                value="{{ $f03m05->kcn_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">KcN (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="kcn_gas_li" class="form-control"
                                                value="{{ $f03m05->kcn_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_slant_tsi" class="form-control"
                                                value="{{ $f03m05->malonate_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_blank_tsi" class="form-control"
                                                value="{{ $f03m05->malonate_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_butt_tsi" class="form-control"
                                                value="{{ $f03m05->malonate_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->malonate_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_gas_tsi" class="form-control"
                                                value="{{ $f03m05->malonate_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_slant_li" class="form-control"
                                                value="{{ $f03m05->malonate_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_butt_li" class="form-control"
                                                value="{{ $f03m05->malonate_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_h2s_li" class="form-control"
                                                value="{{ $f03m05->malonate_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Malonate (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="malonate_gas_li" class="form-control"
                                                value="{{ $f03m05->malonate_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_slant_tsi" class="form-control"
                                                value="{{ $f03m05->indole_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_blank_tsi" class="form-control"
                                                value="{{ $f03m05->indole_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_butt_tsi" class="form-control"
                                                value="{{ $f03m05->indole_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->indole_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_gas_tsi" class="form-control"
                                                value="{{ $f03m05->indole_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_slant_li" class="form-control"
                                                value="{{ $f03m05->indole_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_butt_li" class="form-control"
                                                value="{{ $f03m05->indole_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_h2s_li" class="form-control"
                                                value="{{ $f03m05->indole_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Indole (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="indole_gas_li" class="form-control"
                                                value="{{ $f03m05->indole_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_slant_tsi" class="form-control"
                                                value="{{ $f03m05->red_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_blank_tsi" class="form-control"
                                                value="{{ $f03m05->red_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_butt_tsi" class="form-control"
                                                value="{{ $f03m05->red_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->red_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_gas_tsi" class="form-control"
                                                value="{{ $f03m05->red_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_slant_li" class="form-control"
                                                value="{{ $f03m05->red_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_butt_li" class="form-control"
                                                value="{{ $f03m05->red_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_h2s_li" class="form-control"
                                                value="{{ $f03m05->red_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Methyl red (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="red_gas_li" class="form-control"
                                                value="{{ $f03m05->red_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_slant_tsi" class="form-control"
                                                value="{{ $f03m05->voges_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_blank_tsi" class="form-control"
                                                value="{{ $f03m05->voges_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_butt_tsi" class="form-control"
                                                value="{{ $f03m05->voges_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->voges_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_gas_tsi" class="form-control"
                                                value="{{ $f03m05->voges_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_slant_li" class="form-control"
                                                value="{{ $f03m05->voges_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_butt_li" class="form-control"
                                                value="{{ $f03m05->voges_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_h2s_li" class="form-control"
                                                value="{{ $f03m05->voges_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Voges-Proscher (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="voges_gas_li" class="form-control"
                                                value="{{ $f03m05->voges_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_slant_tsi" class="form-control"
                                                value="{{ $f03m05->citrate_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_blank_tsi" class="form-control"
                                                value="{{ $f03m05->citrate_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_butt_tsi" class="form-control"
                                                value="{{ $f03m05->citrate_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->citrate_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_gas_tsi" class="form-control"
                                                value="{{ $f03m05->citrate_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_slant_li" class="form-control"
                                                value="{{ $f03m05->citrate_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_butt_li" class="form-control"
                                                value="{{ $f03m05->citrate_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_h2s_li" class="form-control"
                                                value="{{ $f03m05->citrate_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Citrate (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="citrate_gas_li" class="form-control"
                                                value="{{ $f03m05->citrate_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row test-row">
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (Slant)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_slant_tsi" class="form-control"
                                                value="{{ $f03m05->sucrose_slant_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_blank_tsi" class="form-control"
                                                value="{{ $f03m05->sucrose_blank_tsi }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (Butt)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_butt_tsi" class="form-control"
                                                value="{{ $f03m05->sucrose_butt_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (H2S)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_h2s_tsi" class="form-control"
                                                value="{{ $f03m05->sucrose_h2s_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (Gas)(TSI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_gas_tsi" class="form-control"
                                                value="{{ $f03m05->sucrose_gas_tsi }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (Slant)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_slant_li" class="form-control"
                                                value="{{ $f03m05->sucrose_slant_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (Butt)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_butt_li" class="form-control"
                                                value="{{ $f03m05->sucrose_butt_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (H2S)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_h2s_li" class="form-control"
                                                value="{{ $f03m05->sucrose_h2s_li }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5">Sucrose (Gas)(LI)</label>

                                        <div class="col-sm-7">
                                            <input type="text" name="sucrose_gas_li" class="form-control"
                                                value="{{ $f03m05->sucrose_gas_li }}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Salmonella</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="sal" class="form-control"
                                                value="{{ $f03m05->sal }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="analysed_name" class="form-control"
                                                value="{{ $f03m05->analysed_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="analysed_sign" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Analysed Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="analysed_date" class="form-control"
                                                value="{{ $f03m05->analysed_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="checked_name" class="form-control"
                                                value="{{ $f03m05->checked_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Sign </label>

                                        <div class="col-sm-8">
                                            <input type="file" name="checked_sign" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Checked Date</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="checked_date" class="form-control"
                                                value="{{ $f03m05->checked_date }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-12 my-0 text-center">
                                    <button type="submit" class="btn btn-md w-25 submit-button"><i
                                            class="fas fa-check-double"></i> <b>Update</b></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script></script>

@endsection
