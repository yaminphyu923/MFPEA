@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('ml-media-stock-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper" style="background-color: #fff !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>Micro Lab Media Stock(Detail)</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ url('ml_media_stock/purchase', $ml_media_stock->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-plus-circle pr-0"></i><b> Purchase</b></button>
                            </a>
                            <a href="{{ url('ml_media_stock/used', $ml_media_stock->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-minus-circle m-0"></i>
                                    <b> Used</b></button>
                            </a>
                            <a href="{{ route('ml_media_stock.index') }}">
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
                                            value="{{ $ml_media_stock->item_name }}">
                                    </div>

                                    <label class="col-sm-2">Description</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="description" id="description" class="form-control"
                                            value="{{ $ml_media_stock->description }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Quantity</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="quantity" id="quantity" class="form-control"
                                            value="{{ $ml_media_stock->quantity }}">
                                    </div>
                                    <label class="col-sm-2">Date</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="date" id="date" class="form-control"
                                            value="{{ $ml_media_stock->date }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Balance</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="balance" id="balance" class="form-control"
                                            value="{{ $ml_media_stock->balance }}">
                                    </div>
                                    <label class="col-sm-2">Balance(g)</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="balance_g" id="balance_g" class="form-control"
                                            value="{{ $ml_media_stock->balance_g }}">
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Balance(ml)</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="balance_ml" id="balance_ml" class="form-control"
                                            value="{{ $ml_media_stock->balance_ml }}">
                                    </div>
                                    <label class="col-sm-2">Balance(bot)</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="balance_bot" id="balance_bot" class="form-control"
                                            value="{{ $ml_media_stock->balance_bot }}">
                                    </div>

                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Used</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="used" id="used" class="form-control"
                                            value="{{ $ml_media_stock->used }}">
                                    </div>
                                    <label class="col-sm-2">New Bottle</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="new_bottle" id="new_bottle" class="form-control"
                                            value="{{ $ml_media_stock->new_bottle }}">
                                    </div>

                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-2">Total Stock</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="total_stock" id="total_stock" class="form-control"
                                            value="{{ $ml_media_stock->total_stock }}">
                                    </div>
                                    <label class="col-sm-2">Remark</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="remark" id="remark" class="form-control"
                                            value="{{ $ml_media_stock->remark }}">
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
