@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('ml-equipment-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper" style="background-color: #fff !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Micro Lab Equipment List(Detail)</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ url('ml_equipment_list/purchase', $ml_equipment_list->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-plus-circle pr-0"></i><b> Purchase</b></button>
                            </a>
                            <a href="{{ url('ml_equipment_list/used', $ml_equipment_list->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-minus-circle m-0"></i>
                                    <b> Used</b></button>
                            </a>
                            <a href="{{ route('ml_equipment_list.index') }}">
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
                                    <label class="col-sm-2">Equipment Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="equipment_name" id="equipment_name" class="form-control"
                                            value="{{ $ml_equipment_list->equipment_name }}">
                                    </div>

                                    <label class="col-sm-2">Brand</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="brand" id="brand" class="form-control"
                                            value="{{ $ml_equipment_list->brand }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Model</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="model" id="model" class="form-control"
                                            value="{{ $ml_equipment_list->model }}">
                                    </div>
                                    <label class="col-sm-2">Serial No</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="serial_no" id="serial_no" class="form-control"
                                            value="{{ $ml_equipment_list->serial_no }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">ID No</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="id_no" id="id_no" class="form-control"
                                            value="{{ $ml_equipment_list->id_no }}">
                                    </div>
                                    <label class="col-sm-2">Supplier</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="supplier" id="supplier" class="form-control"
                                            value="{{ $ml_equipment_list->supplier }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Date of Purchase/Donate</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="purchase_donate_date" id="purchase_donate_date"
                                            class="form-control" value="{{ $ml_equipment_list->purchase_donate_date }}">
                                    </div>
                                    <label class="col-sm-2">Date of Installation Finished and First</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="installation_date" id="installation_date"
                                            class="form-control" value="{{ $ml_equipment_list->installation_date }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Location</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="location" id="location" class="form-control"
                                            value="{{ $ml_equipment_list->location }}">
                                    </div>
                                    <label class="col-sm-2">Total Stock</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="total_stock" id="total_stock" class="form-control"
                                            value="{{ $ml_equipment_list->total_stock }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Remark</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="remark" id="remark" class="form-control"
                                            value="{{ $ml_equipment_list->remark }}">
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
