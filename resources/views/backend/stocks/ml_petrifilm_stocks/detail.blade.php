@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('ml-petrifilm-stock-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper" style="background-color: #fff !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Micro Lab Petrifilm Stock(Detail)</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ url('ml_petrifilm_stock/purchase', $ml_petrifilm_stock->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-plus-circle pr-0"></i><b> Purchase</b></button>
                            </a>
                            <a href="{{ url('ml_petrifilm_stock/used', $ml_petrifilm_stock->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-minus-circle m-0"></i>
                                    <b> Used</b></button>
                            </a>
                            <a href="{{ route('ml_petrifilm_stock.index') }}">
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
                                    <label class="col-sm-2">Item Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="item_name" id="item_name" class="form-control"
                                            value="{{ $ml_petrifilm_stock->item_name }}">
                                    </div>

                                    <label class="col-sm-2">Description</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="description" id="description" class="form-control"
                                            value="{{ $ml_petrifilm_stock->description }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="date" id="date" class="form-control"
                                            value="{{ $ml_petrifilm_stock->date }}">
                                    </div>
                                    <label class="col-sm-2">Stock</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="stock" id="stock" class="form-control"
                                            value="{{ $ml_petrifilm_stock->stock }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">New</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="new" id="new" class="form-control"
                                            value="{{ $ml_petrifilm_stock->new }}">
                                    </div>
                                    <label class="col-sm-2">Usage/Damage</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="usage" id="usage" class="form-control"
                                            value="{{ $ml_petrifilm_stock->usage }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Balance</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="balance" id="balance" class="form-control"
                                            value="{{ $ml_petrifilm_stock->balance }}">
                                    </div>
                                    <label class="col-sm-2">Total Stock</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="total_stock" id="total_stock" class="form-control"
                                            value="{{ $ml_petrifilm_stock->total_stock }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">

                                    <label class="col-sm-2">Remark</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="remark" id="remark" class="form-control"
                                            value="{{ $ml_petrifilm_stock->remark }}">
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
