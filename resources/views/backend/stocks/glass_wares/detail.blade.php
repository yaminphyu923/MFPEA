@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('glass-ware-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper" style="background-color: #fff !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Chemical Lab(glass wares)</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ url('glass_wares/purchase', $glass_ware->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-plus-circle pr-0"></i><b> Purchase</b></button>
                            </a>
                            <a href="{{ url('glass_wares/used', $glass_ware->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-minus-circle m-0"></i>
                                    <b> Used</b></button>
                            </a>
                            <a href="{{ route('glass_wares.index') }}">
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
                                    <label class="col-sm-4">Items</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="items" id="items" class="form-control"
                                            value="{{ $glass_ware->items }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-4">Capacity</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="capacity" id="capacity" class="form-control"
                                            value="{{ $glass_ware->capacity }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-4">Total Stock</label>
                                    <div class="col-sm-8">
                                        <input type="number" name="total_stock" id="total_stock" class="form-control"
                                            value="{{ $glass_ware->total_stock }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-4">Remark</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="remark" id="remark" class="form-control"
                                            value="{{ $glass_ware->remark }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-4">Unit</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="unit" id="unit" class="form-control"
                                            value="{{ $glass_ware->unit }}">
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-4">Quantity</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="qty" id="qty" class="form-control"
                                            value="{{ $glass_ware->qty }}">
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
