@extends('backend.main_no_sidebar')

@section('stock-active', 'active')

@section('fidsl-active', 'active')

@section('content')
    @include('backend.stocks.stock_nav')

    <div class="content-wrapper" style="background-color: #fff !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3 card-button">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="mt-2"><b>FIDSL General Stock List(Detail)</small></b></h4>
                        <div class="justify-content-end">
                            <a href="{{ url('fidsl_general_stock/purchase', $fidsl_general_stock->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-plus-circle pr-0"></i><b> Purchase</b></button>
                            </a>
                            <a href="{{ url('fidsl_general_stock/used', $fidsl_general_stock->id) }}">
                                <button type="button" class="btn btn-md btn-primary"><i
                                        class="fas fa-minus-circle m-0"></i>
                                    <b> Used</b></button>
                            </a>
                            <a href="{{ route('fidsl_general_stock.index') }}">
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
                                    <label class="col-sm-3 offset-sm-1">Product Name</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="product_name" id="product_name" class="form-control"
                                            value="{{ $fidsl_general_stock->product_name }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label for="" class="col-sm-3 offset-sm-1">Date</label>

                                    <div class="col-sm-7">
                                        <input type="date" name="date" class="form-control"
                                            value="{{ $fidsl_general_stock->date }}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row mx-2">
                                    <label class="col-sm-3 offset-sm-1">Total Stock</label>
                                    <div class="col-sm-7">
                                        <input type="number" name="total_stock" id="total_stock" class="form-control"
                                            value="{{ $fidsl_general_stock->total_stock }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mx-2">
                                    <label class="col-sm-3 offset-sm-1">Remark</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="remark" id="remark" class="form-control"
                                            value="{{ $fidsl_general_stock->remark }}" disabled>
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
