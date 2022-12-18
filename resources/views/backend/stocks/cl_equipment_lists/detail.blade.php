@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('cl-equipment-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper" style="background-color: #fff !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Chemical Lab Equipment List(Detail)</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ url('cl_equipment_list/purchase', $cl_equipment_list->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-plus-circle pr-0"></i><b> Purchase</b></button>
                            </a>
                            <a href="{{ url('cl_equipment_list/used', $cl_equipment_list->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-minus-circle m-0"></i>
                                    <b> Used</b></button>
                            </a>
                            <a href="{{ route('cl_equipment_list.index') }}">
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
                                    <label class="col-sm-2">Product Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="product_name" id="product_name" class="form-control"
                                            value="{{ $cl_equipment_list->product_name }}">
                                    </div>

                                    <label class="col-sm-2">Model No</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="model_no" id="model_no" class="form-control"
                                            value="{{ $cl_equipment_list->model_no }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Capacity</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="capacity" id="capacity" class="form-control"
                                            value="{{ $cl_equipment_list->capacity }}">
                                    </div>
                                    <label class="col-sm-2">Power Supply</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="power_supply" id="power_supply" class="form-control"
                                            value="{{ $cl_equipment_list->power_supply }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Manufacture's Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="manufacture_name" id="manufacture_name"
                                            class="form-control" value="{{ $cl_equipment_list->manufacture_name }}">
                                    </div>
                                    <label class="col-sm-2">Country</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="country" id="country" class="form-control"
                                            value="{{ $cl_equipment_list->country }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Supplier</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="supplier" id="supplier" class="form-control"
                                            value="{{ $cl_equipment_list->supplier }}">
                                    </div>
                                    <label class="col-sm-2">Identification</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="identification" id="identification" class="form-control"
                                            value="{{ $cl_equipment_list->identification }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Brand</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="brand" id="brand" class="form-control"
                                            value="{{ $cl_equipment_list->brand }}">
                                    </div>
                                    <label class="col-sm-2">Total Stock</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="total_stock" id="total_stock" class="form-control"
                                            value="{{ $cl_equipment_list->total_stock }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Remark</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="remark" id="remark" class="form-control"
                                            value="{{ $cl_equipment_list->remark }}">
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
