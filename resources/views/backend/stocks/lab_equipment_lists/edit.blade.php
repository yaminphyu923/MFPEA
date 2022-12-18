@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('ml-equipment-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{ route('ml_equipment_list.index') }}">
                            <button type="button" class="btn btn-md btn-primary"><i class="fas fa-hand-point-left"></i>
                                <b>Back</b></button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card bg-primary text-light">
                    <div class="card-header">
                        <h4 class="text-center py-2"><b>Micro Lab Equipment List(Edit)</b></h4>
                    </div>

                    <form action="{{ route('ml_equipment_list.update', $ml_equipment_list->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Equipment Name</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="equipment_name" class="form-control"
                                                value="{{ $ml_equipment_list->equipment_name }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Brand</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="brand" class="form-control"
                                                value="{{ $ml_equipment_list->brand }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Model</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="model" class="form-control"
                                                value="{{ $ml_equipment_list->model }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Serial No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="serial_no" class="form-control"
                                                value="{{ $ml_equipment_list->serial_no }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">ID No</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="id_no" class="form-control"
                                                value="{{ $ml_equipment_list->id_no }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Supplier</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="supplier" class="form-control"
                                                value="{{ $ml_equipment_list->supplier }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date of Purchase/Donate</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="purchase_donate_date" class="form-control"
                                                value="{{ $ml_equipment_list->purchase_donate_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Date of Installation Finished and
                                            First</label>

                                        <div class="col-sm-8">
                                            <input type="date" name="installation_date" class="form-control"
                                                value="{{ $ml_equipment_list->installation_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Location</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="location" class="form-control"
                                                value="{{ $ml_equipment_list->location }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Total Stock</label>

                                        <div class="col-sm-8">
                                            <input type="number" name="total_stock" class="form-control"
                                                value="{{ $ml_equipment_list->total_stock }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 my-0 py-0">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-4">Remark</label>

                                        <div class="col-sm-8">
                                            <input type="text" name="remark" class="form-control"
                                                value="{{ $ml_equipment_list->remark }}">
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
