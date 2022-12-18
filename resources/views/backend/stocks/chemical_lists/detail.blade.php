@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('chemical-list-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper" style="background-color: #fff !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Chemical Lab Chemical List(Detail)</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ url('chemical_list/purchase', $chemical_list->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-plus-circle pr-0"></i><b> Purchase</b></button>
                            </a>
                            <a href="{{ url('chemical_list/used', $chemical_list->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-minus-circle m-0"></i>
                                    <b> Used</b></button>
                            </a>
                            <a href="{{ route('chemical_list.index') }}">
                                <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                    <b>Back</b></button>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 my-0">
                        <div class="card stock-card">
                            <div class="card-body">
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Chemical Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="chemical_name" id="chemical_name" class="form-control"
                                            value="{{ $chemical_list->chemical_name }}">
                                    </div>

                                    <label class="col-sm-2">Description</label>
                                    <div class="col-sm-4">
                                        <textarea name="description" id="description" cols="30" rows="1" class="form-control">{{ $chemical_list->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Brand</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="brand" id="brand" class="form-control"
                                            value="{{ $chemical_list->brand }}">
                                    </div>
                                    <label class="col-sm-2">Country of Origin</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="country" id="country" class="form-control"
                                            value="{{ $chemical_list->country }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Serial No</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="serial_no" id="serial_no" class="form-control"
                                            value="{{ $chemical_list->serial_no }}">
                                    </div>
                                    <label class="col-sm-2">Package</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="package" id="package" class="form-control"
                                            value="{{ $chemical_list->package }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Quantity</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="qty" id="qty" class="form-control"
                                            value="{{ $chemical_list->qty }}">
                                    </div>
                                    <label class="col-sm-2">Quantity(g/kg/L)</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="qty_gkgl" id="qty_gkgl" class="form-control"
                                            value="{{ $chemical_list->qty_gkgl }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Unit</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="unit" id="unit" class="form-control"
                                            value="{{ $chemical_list->unit }}">
                                    </div>
                                    <label class="col-sm-2">Formula</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="formula" id="formula" class="form-control"
                                            value="{{ $chemical_list->formula }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Total Stock</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="total_stock" id="total_stock" class="form-control"
                                            value="{{ $chemical_list->total_stock }}">
                                    </div>
                                    <label class="col-sm-2">Remark</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="remark" id="remark" class="form-control"
                                            value="{{ $chemical_list->remark }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script></script>
@endsection
