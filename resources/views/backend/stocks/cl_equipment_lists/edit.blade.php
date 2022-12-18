@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('cl-equipment-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('cl_equipment_list.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Chemical Lab Equipment List(Edit)</b></h4>
                    </div>

                    <form action="{{ route('cl_equipment_list.update', $cl_equipment_list->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Product Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="product_name" class="form-control"
                                                value="{{ $cl_equipment_list->product_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Model No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="model_no" class="form-control"
                                                value="{{ $cl_equipment_list->model_no }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Capacity</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="capacity" class="form-control"
                                                value="{{ $cl_equipment_list->capacity }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Power Supply</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="power_supply" class="form-control"
                                                value="{{ $cl_equipment_list->power_supply }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Manufacture's Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="manufacture_name" class="form-control"
                                                value="{{ $cl_equipment_list->manufacture_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Country</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="country" class="form-control"
                                                value="{{ $cl_equipment_list->country }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Supplier</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="supplier" class="form-control"
                                                value="{{ $cl_equipment_list->supplier }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Identification</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="identification" class="form-control"
                                                value="{{ $cl_equipment_list->identification }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Brand</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="brand" class="form-control"
                                                value="{{ $cl_equipment_list->brand }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Total Stock</label>

                                        <div class="col-sm-8">
                                            <input type="number" name="total_stock" class="form-control"
                                                value="{{ $cl_equipment_list->total_stock }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remark</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remark" class="form-control"
                                                value="{{ $cl_equipment_list->remark }}">
                                        </div>
                                    </div>
                                </div>

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
